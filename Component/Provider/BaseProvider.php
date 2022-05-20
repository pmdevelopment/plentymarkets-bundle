<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 12.07.2017
 * Time: 11:24
 */

namespace PM\PlentyMarketsBundle\Component\Provider;

use DateTime;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\RequestOptions;
use PM\PlentyMarketsBundle\Component\Exceptions\ApiLockActiveException;
use PM\PlentyMarketsBundle\Component\Exceptions\ApiLoginFailedException;
use PM\PlentyMarketsBundle\Component\Helper\ErrorHelper;
use PM\PlentyMarketsBundle\Component\Request\Batch;
use PM\PlentyMarketsBundle\Component\RestfulUrl;
use PM\PlentyMarketsBundle\Entity\ApiLock;
use PM\PlentyMarketsBundle\Entity\LimitHistory;
use PM\PlentyMarketsBundle\Services\RestfulService;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;


/**
 * Class BaseProvider
 *
 * @package PM\PlentyMarketsBundle\Component\Provider
 */
class BaseProvider
{
    public const HEADER_LONG_PERIOD_LIMIT = 'X-Plenty-Global-Long-Period-Limit';
    public const HEADER_LONG_PERIOD_DECAY = 'X-Plenty-Global-Long-Period-Decay';
    public const HEADER_LONG_PERIOD_CALLS_LEFT = 'X-Plenty-Global-Long-Period-Calls-Left';

    public const HEADER_SHORT_PERIOD_LIMIT = 'X-Plenty-Global-Short-Period-Limit';
    public const HEADER_SHORT_PERIOD_DECAY = 'X-Plenty-Global-Short-Period-Decay';
    public const HEADER_SHORT_PERIOD_CALLS_LEFT = 'X-Plenty-Global-Short-Period-Calls-Left';

    public const HEADER_INTERNAL_API_ID = 'X-Internal-Api-Id';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var RestfulService
     */
    private $service;

    /**
     * OrdersProvider constructor.
     *
     * @param Client         $client
     * @param RestfulService $service
     */
    public function __construct(Client $client, RestfulService $service)
    {
        $this->client = $client;
        $this->service = $service;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return RestfulService
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param Client $client
     *
     * @return BaseProvider
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get Batch result
     *
     * @param Batch $batch
     *
     * @return Throwable[]|ResponseInterface[]|array
     * @throws Throwable
     */
    public function getBatchResult(Batch $batch): array
    {
        $pageCount = $batch->getPageCount();
        $result = [];

        for ($page = 1; $page <= $pageCount; $page++) {
            $json = $this->getService()->getSerializer()->serialize($batch->getPage($page), 'json');
            $array = json_decode($json, true);


            $response = $this->getResponse(
                Request::METHOD_POST,
                RestfulUrl::BATCH,
                [
                    RequestOptions::JSON => $array,
                ]
            );

            $result[] = $response;
        }

        return $result;
    }


    /**
     * Get Response. Login again if unauthorized
     *
     * @param string     $method
     * @param string     $path
     * @param array      $options
     * @param bool|false $final
     * @param bool       $ignoreLock
     * @param bool       $flushEntities
     *
     * @return Throwable|mixed|ResponseInterface
     * @throws Throwable
     */
    public function getResponse(
        string $method,
        string $path,
        array $options = [],
        bool $final = false,
        bool $ignoreLock = false,
        bool $flushEntities = true
    ) {
        /* Option to skip for better performance */
        if (
            (true === defined('__FULL_SPEED_API') && true === __FULL_SPEED_API) ||
            true === $this->getService()->getConfig()->isPriority()
        ) {
            $ignoreLock = true;
        }

        /* Check for lock */
        $requestHeaders = $this->getClient()->getConfig('headers');

        $apiLockRepository = $this->getService()->getApiLockRepository();
        $internalApiId = $requestHeaders[self::HEADER_INTERNAL_API_ID];

        if (false === $ignoreLock && true === $apiLockRepository->hasActive($internalApiId)) {
            $currentLock = $apiLockRepository->getActive($internalApiId);
            $oneMinuteLater = new DateTime('+61 seconds');

            if ($oneMinuteLater > $currentLock->getValidUntil()) {
                sleep($currentLock->getValidUntil()->getTimestamp() - time());

                return $this->getResponse($method, $path, $options, $final, $ignoreLock, $flushEntities);
            }

            return (new ApiLockActiveException());
        }

        /* Request */
        try {
            $response = $this->getClient()->request($method, $path, $options);
        } catch (Throwable $e) {
            /* Token expired */
            if (false === $final && $e instanceof ClientException && null !== $e->getResponse() && Response::HTTP_UNAUTHORIZED === $e->getResponse()->getStatusCode()) {
                $this->getService()->increaseStatistics($internalApiId, $e->getResponse()->getStatusCode());

                try {
                    $this->setClient($this->getService()->login());
                } catch (Throwable $e) {
                    return new ApiLoginFailedException(
                        'Login after receiving 401 error failed!',
                        ErrorHelper::CODE_LOGIN_FAILED,
                        $e
                    );
                }

                return $this->getResponse($method, $path, $options, true, $flushEntities);
            }

            /* Short period limit */
            if (false === $final && $e instanceof ClientException && Response::HTTP_TOO_MANY_REQUESTS === $e->getResponse()->getStatusCode()) {
                $this->getService()->increaseStatistics($internalApiId, $e->getResponse()->getStatusCode());

                $this->saveRequestLimits($e->getResponse()->getHeaders(), $path, true);

                sleep(70);

                return $this->getResponse($method, $path, $options, true, $flushEntities);
            }

            /* Timeout or connection refused */
            if (false === $final && $e instanceof ConnectException) {
                sleep(10);

                return $this->getResponse($method, $path, $options, true, $flushEntities);
            }

            /* Server error */
            if (
                false === $final && $e instanceof ServerException &&
                (Response::HTTP_BAD_GATEWAY === $e->getResponse()->getStatusCode() || Response::HTTP_INTERNAL_SERVER_ERROR === $e->getResponse()->getStatusCode())
            ) {
                sleep(2);

                return $this->getResponse($method, $path, $options, true, $flushEntities);
            }

            return $e;
        }

        /* Option to skip for better performance */
        if (true === $ignoreLock) {
            return $response;
        }

        /* Statistics */
        $this->getService()->increaseStatistics($internalApiId, $response->getStatusCode(), $flushEntities);

        /* Save Limits */
        $this->saveRequestLimits($response->getHeaders(), $path, false, $flushEntities);

        return $response;
    }

    /**
     * Save Request Limits
     *
     * @param array  $responseHeaders
     * @param string $path
     * @param bool   $shortLimitException
     *
     * @param bool   $flushEntities
     *
     * @return bool
     * @throws Exception
     */
    private function saveRequestLimits(
        array $responseHeaders,
        string $path,
        bool $shortLimitException = false,
        bool $flushEntities = true
    ): bool {
        $path = explode('/', $path);
        $basePath = reset($path);

        if (false === isset($responseHeaders[self::HEADER_LONG_PERIOD_CALLS_LEFT])) {
            return false;
        }

        $requestHeaders = $this->getClient()->getConfig('headers');
        if (false === isset($requestHeaders[self::HEADER_INTERNAL_API_ID])) {
            return false;
        }

        $now = new DateTime();

        $history = $this->getService()->getLimitHistoryRepository()->findCurrent(
            $requestHeaders[self::HEADER_INTERNAL_API_ID],
            $basePath
        );
        if (null === $history) {
            $history = new LimitHistory();
            $history
                ->setDay($now)
                ->setApi($requestHeaders[self::HEADER_INTERNAL_API_ID])
                ->setPath($basePath);
        }

        /* Limit */
        $history
            ->setLongPeriodTotal(reset($responseHeaders[self::HEADER_LONG_PERIOD_LIMIT]))
            ->setShortPeriodTotal(reset($responseHeaders[self::HEADER_SHORT_PERIOD_LIMIT]));

        /* Left: Long */
        $longLeft = reset($responseHeaders[self::HEADER_LONG_PERIOD_CALLS_LEFT]);
        $history->setLongPeriodLatest($longLeft);

        if (null === $history->getId() || $history->getLongPeriodMinimum() > $longLeft) {
            $history->setLongPeriodMinimum($longLeft);
        }

        /* Left: Short */
        $shortLeft = reset($responseHeaders[self::HEADER_SHORT_PERIOD_CALLS_LEFT]);
        $history->setShortPeriodLatest($shortLeft);

        if (null === $history->getId() || $history->getShortPeriodMinimum() > $shortLeft) {
            $history->setShortPeriodMinimum($shortLeft);
        }

        if (true === $shortLimitException) {
            $history->setShortPeriodException($history->getShortPeriodException() + 1);
        }


        /* Lock */
        $leftPercentage = round($history->getLongPeriodLatest() / $history->getLongPeriodTotal(), 4);
        if ($leftPercentage <= $this->getService()->getConfig()->getLimitLock()) {
            $this->createApiLock(
                reset($responseHeaders[self::HEADER_LONG_PERIOD_DECAY]),
                $requestHeaders[self::HEADER_INTERNAL_API_ID],
                ApiLock::TYPE_LIMIT_LOCK_PERCENTAGE
            );
        }

        $leftPercentage = round($history->getShortPeriodLatest() / $history->getShortPeriodTotal(), 4);
        if ($leftPercentage <= $this->getService()->getConfig()->getShortLimitLock()) {
            $this->createApiLock(
                reset($responseHeaders[self::HEADER_SHORT_PERIOD_DECAY]),
                $requestHeaders[self::HEADER_INTERNAL_API_ID],
                ApiLock::TYPE_LIMIT_SHORT_LOCK_PERCENTAGE
            );
        }

        /* Save */
        $this->getService()->getEntityManager()->persist($history);

        if (true === $flushEntities) {
            $this->getService()->getEntityManager()->flush();
        }

        return true;
    }

    /**
     * Create ApiLimit
     *
     * @param int    $decayTime
     * @param string $internalApiId
     * @param string $lockType
     *
     * @throws Exception
     */
    private function createApiLock(int $decayTime, string $internalApiId, string $lockType): void
    {
        $lock = new ApiLock();
        $lock
            ->setApi($internalApiId)
            ->setType($lockType)
            ->setValidFrom(new DateTime())
            ->setValidUntil(new DateTime(sprintf('+%d seconds', $decayTime + 1)))
            ->setDescription($this->getService()->getConfig()->getUri());

        $this->getService()->getEntityManager()->persist($lock);
    }
}