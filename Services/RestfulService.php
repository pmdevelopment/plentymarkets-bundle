<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 10.07.2017
 * Time: 11:12
 */

namespace PM\PlentyMarketsBundle\Services;

use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use JMS\Serializer\SerializerInterface;
use PM\PlentyMarketsBundle\Component\Config;
use PM\PlentyMarketsBundle\Component\Helper\ServiceHelper;
use PM\PlentyMarketsBundle\Component\Provider\AccountsProvider;
use PM\PlentyMarketsBundle\Component\Provider\BackendProvider;
use PM\PlentyMarketsBundle\Component\Provider\BaseProvider;
use PM\PlentyMarketsBundle\Component\Provider\CategoryProvider;
use PM\PlentyMarketsBundle\Component\Provider\ItemsProvider;
use PM\PlentyMarketsBundle\Component\Provider\OrdersProvider;
use PM\PlentyMarketsBundle\Component\Provider\PaymentsProvider;
use PM\PlentyMarketsBundle\Component\Provider\StockManagementProvider;
use PM\PlentyMarketsBundle\Component\Provider\WarehousesProvider;
use PM\PlentyMarketsBundle\Component\RestfulUrl;
use PM\PlentyMarketsBundle\Entity\AccessToken;
use PM\PlentyMarketsBundle\Entity\ApiHits;
use PM\PlentyMarketsBundle\Entity\ApiLock;
use PM\PlentyMarketsBundle\Entity\LimitHistory;
use PM\PlentyMarketsBundle\Repository\AccessTokenRepository;
use PM\PlentyMarketsBundle\Repository\ApiHitsRepository;
use PM\PlentyMarketsBundle\Repository\ApiLockRepository;
use PM\PlentyMarketsBundle\Repository\LimitHistoryRepository;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Throwable;


/**
 * Class RestfulService
 *
 * @package PM\PlentyMarketsBundle\Services
 */
class RestfulService
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var AccessTokenRepository
     */
    private $accessTokenRepository;

    /**
     * @var ApiHitsRepository
     */
    private $apiHitsRepository;

    /**
     * @var ApiLockRepository
     */
    private $apiLockRepository;

    /**
     * @var LimitHistoryRepository
     */
    private $limitHistoryRepository;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var bool
     */
    private $parameterGuzzleVerifySsl;

    /**
     * RestfulService constructor.
     *
     * @param ManagerRegistry     $registry
     * @param SerializerInterface $serializer
     * @param LoggerInterface     $logger
     * @param bool                $parameterGuzzleVerifySsl
     */
    public function __construct(
        ManagerRegistry $registry,
        SerializerInterface $serializer,
        LoggerInterface $logger,
        $parameterGuzzleVerifySsl
    ) {
        $this->serializer = $serializer;
        $this->logger = $logger;
        $this->entityManager = $registry->getManager();

        $this->accessTokenRepository = $registry->getRepository(AccessToken::class);
        $this->apiHitsRepository = $registry->getRepository(ApiHits::class);
        $this->apiLockRepository = $registry->getRepository(ApiLock::class);
        $this->limitHistoryRepository = $registry->getRepository(LimitHistory::class);

        $this->parameterGuzzleVerifySsl = $parameterGuzzleVerifySsl;
    }

    /**
     * @return bool
     */
    public function isParameterGuzzleVerifySsl()
    {
        return $this->parameterGuzzleVerifySsl;
    }

    /**
     * @return EntityManagerInterface
     */
    public function getEntityManager(): EntityManagerInterface
    {
        return $this->entityManager;
    }

    /**
     * @return SerializerInterface
     */
    public function getSerializer(): SerializerInterface
    {
        return $this->serializer;
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    /**
     * @return ApiLockRepository
     */
    public function getApiLockRepository(): ApiLockRepository
    {
        return $this->apiLockRepository;
    }

    /**
     * @return LimitHistoryRepository
     */
    public function getLimitHistoryRepository(): LimitHistoryRepository
    {
        return $this->limitHistoryRepository;
    }

    /**
     * @return Config
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * @param Config $config
     *
     * @return RestfulService
     */
    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Orders
     *
     * @param Config $config
     *
     * @return AccountsProvider
     * @throws Throwable
     */
    public function accounts(Config $config)
    {
        $this->setConfig($config);
        $client = $this->login();

        return new AccountsProvider($client, $this);
    }

    /**
     * Backend
     *
     * @param Config $config
     *
     * @return BackendProvider
     * @throws Throwable
     */
    public function backend(Config $config)
    {
        $this->setConfig($config);
        $client = $this->login();

        return new BackendProvider($client, $this);
    }

    /**
     * Base
     *
     * @param Config $config
     *
     * @return BaseProvider
     * @throws Throwable
     */
    public function base(Config $config)
    {
        $this->setConfig($config);
        $client = $this->login();

        return new BaseProvider($client, $this);
    }

    /**
     * @param Config $config
     *
     * @return CategoryProvider
     * @throws Throwable
     */
    public function categories(Config $config): CategoryProvider
    {
        $this->setConfig($config);
        $client = $this->login();

        return new CategoryProvider($client, $this);
    }

    /**
     * Orders
     *
     * @param Config $config
     *
     * @return OrdersProvider
     * @throws Throwable
     */
    public function orders(Config $config)
    {
        $this->setConfig($config);
        $client = $this->login();

        return new OrdersProvider($client, $this);
    }

    /**
     * Items
     *
     * @param Config $config
     *
     * @return ItemsProvider
     * @throws Throwable
     */
    public function items(Config $config)
    {
        $this->setConfig($config);
        $client = $this->login();

        return new ItemsProvider($client, $this);
    }

    /**
     * Payments
     *
     * @param Config $config
     *
     * @return PaymentsProvider
     * @throws Throwable
     */
    public function payments(Config $config)
    {
        $this->setConfig($config);
        $client = $this->login();

        return new PaymentsProvider($client, $this);
    }

    /**
     * Warehouse
     *
     * @param Config $config
     *
     * @return WarehousesProvider
     * @throws Throwable
     */
    public function warehouse(Config $config)
    {
        $this->setConfig($config);
        $client = $this->login();

        return new WarehousesProvider($client, $this);
    }

    /**
     * Stock Management
     *
     * @param Config $config
     *
     * @return StockManagementProvider
     * @throws Throwable
     */
    public function stockManagement(Config $config)
    {
        $this->setConfig($config);
        $client = $this->login();

        return new StockManagementProvider($client, $this);
    }

    /**
     * Login: Returns access token if valid login
     *
     * @param null|Config $config
     *
     * @return Client
     * @throws Throwable
     */
    public function login($config = null)
    {
        if (null === $config) {
            $config = $this->getConfig();
        }

        $uri = self::getBaseUri($config->getUri());

        return new Client(
            [
                'base_uri' => $uri,
                'verify'   => $this->isParameterGuzzleVerifySsl(),
                'headers'  => [
                    'Accept'                             => 'application/x.plentymarkets.v1+json',
                    'Authorization'                      => sprintf(
                        'Bearer %s',
                        $this->getAccessToken(
                            $uri,
                            $config->getUsername(),
                            $config->getPassword()
                        )
                    ),
                    BaseProvider::HEADER_INTERNAL_API_ID => ServiceHelper::createApiId(
                        $uri,
                        $config->getUsername(),
                        $config->getPassword()
                    ),
                ],
            ]
        );
    }

    /**
     * Get Login Response
     *
     * @param string $uri
     * @param string $username
     * @param string $password
     *
     * @return mixed|ResponseInterface|Throwable
     */
    public function getLoginResponse($uri, $username, $password)
    {
        $client = new Client(
            [
                'base_uri' => $uri,
                'verify'   => $this->isParameterGuzzleVerifySsl(),
            ]
        );

        try {
            $response = $client->request(
                Request::METHOD_POST,
                RestfulUrl::LOGIN,
                [
                    RequestOptions::QUERY => [
                        'username' => $username,
                        'password' => $password,
                    ],
                ]
            );
        } catch (Throwable $e) {
            return $e;
        }

        return $response;
    }


    /**
     * Get Access Token
     *
     * @param string $uri
     * @param string $username
     * @param string $password
     *
     * @return mixed
     * @throws Throwable
     */
    public function getAccessToken($uri, $username, $password)
    {
        $api = ServiceHelper::createApiId($uri, $username, $password);
        $token = $this->accessTokenRepository->findOneByApi($api);

        if ($token instanceof AccessToken) {
            return $token->getToken();
        }

        $response = $this->getLoginResponse($uri, $username, $password);

        if ($response instanceof Exception) {
            throw $response;
        }

        $json = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
        $token = $json['access_token'];

        $this->saveAccessToken($api, $token, intval($json['expires_in']));
        $this->increaseStatistics($api, $response->getStatusCode());

        return $token;
    }

    /**
     * Save AccessToken
     *
     * @param string $api
     * @param string $token
     * @param int    $expires
     *
     * @return Throwable|RestfulService
     */
    public function saveAccessToken($api, $token, $expires)
    {
        try {
            $now = new DateTime();
        } catch (Throwable $e) {
            return $e;
        }

        $object = new AccessToken();
        $object
            ->setApi($api)
            ->setCreated($now)
            ->setToken($token)
            ->setValidUntil($now->setTimestamp(time() + $expires - 600));

        $this->entityManager->persist($object);
        $this->entityManager->flush();

        return $this;
    }


    /**
     * Get Statistics
     *
     * @param string $internalApiId
     * @param int    $responseStatusCode
     * @param bool   $flushEntities
     *
     * @return Throwable|RestfulService
     * @throws Throwable
     */
    public function increaseStatistics(string $internalApiId, int $responseStatusCode, bool $flushEntities = true)
    {
        $now = new DateTime();

        $statistic = $this->apiHitsRepository->findCurrent($internalApiId);
        if (null === $statistic) {
            $statistic = new ApiHits();
            $statistic
                ->setDay($now)
                ->setApiId($internalApiId);
        }

        $statistic
            ->countIncrease()
            ->responseCodeIncrease($responseStatusCode);

        $this->entityManager->persist($statistic);

        if (true === $flushEntities) {
            $this->entityManager->flush();
        }

        return $this;
    }

    /**
     * Get base uri
     *
     * @param string $uri
     *
     * @return string
     */
    public static function getBaseUri($uri)
    {
        if ('/' !== substr($uri, -1)) {
            $uri = sprintf('%s/', $uri);
        }

        if ('rest/' === substr($uri, -5)) {
            return $uri;
        }

        return sprintf('%srest/', $uri);
    }

}