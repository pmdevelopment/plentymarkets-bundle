<?php

namespace PM\PlentyMarketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PM\PlentyMarketsBundle\Component\Helper\MixedHelper;

/**
 * ApiHits
 */
#[ORM\Table(name: 'pm_plenty_markets_api_hits')]
#[ORM\Index(name: 'api_hits_api_idx', columns: ['day', 'api_id'])]
#[ORM\Entity(repositoryClass: \PM\PlentyMarketsBundle\Repository\ApiHitsRepository::class)]
class ApiHits
{
    const RESPONSE_CODE_200 = '200';
    const RESPONSE_CODE_401 = '401';
    const RESPONSE_CODE_429 = '429';
    const RESPONSE_CODE_OTHER = 'other';

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'integer')]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    private $id;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'day', type: 'date')]
    private $day;

    /**
     * @var string
     */
    #[ORM\Column(name: 'api_id', type: 'string', length: 10)]
    private $apiId;

    /**
     * @var int
     */
    #[ORM\Column(name: 'count', type: 'integer')]
    private $count;

    /**
     * @var int
     */
    #[ORM\Column(name: 'response_code200', type: 'integer')]
    private $responseCode200;

    /**
     * @var int
     */
    #[ORM\Column(name: 'response_code401', type: 'integer')]
    private $responseCode401;

    /**
     * @var int
     */
    #[ORM\Column(name: 'response_code429', type: 'integer')]
    private $responseCode429;

    /**
     * @var int
     */
    #[ORM\Column(name: 'response_code_other', type: 'integer')]
    private $responseCodeOther;

    /**
     * ApiHits constructor.
     */
    public function __construct()
    {
        $this
            ->setCount(0)
            ->setResponseCode200(0)
            ->setResponseCode401(0)
            ->setResponseCode429(0)
            ->setResponseCodeOther(0);
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set day
     *
     * @param \DateTime $day
     *
     * @return ApiHits
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return \DateTime
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set apiId
     *
     * @param string $apiId
     *
     * @return ApiHits
     */
    public function setApiId($apiId)
    {
        $this->apiId = $apiId;

        return $this;
    }

    /**
     * Get apiId
     *
     * @return string
     */
    public function getApiId()
    {
        return $this->apiId;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     *
     * @return ApiHits
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }


    /**
     * @return int
     */
    public function getResponseCode200()
    {
        return $this->responseCode200;
    }

    /**
     * @param int $responseCode200
     *
     * @return ApiHits
     */
    public function setResponseCode200($responseCode200)
    {
        $this->responseCode200 = $responseCode200;

        return $this;
    }

    /**
     * @return int
     */
    public function getResponseCode429()
    {
        return $this->responseCode429;
    }

    /**
     * @param int $responseCode429
     *
     * @return ApiHits
     */
    public function setResponseCode429($responseCode429)
    {
        $this->responseCode429 = $responseCode429;

        return $this;
    }

    /**
     * @return int
     */
    public function getResponseCodeOther()
    {
        return $this->responseCodeOther;
    }

    /**
     * @param int $responseCodeOther
     *
     * @return ApiHits
     */
    public function setResponseCodeOther($responseCodeOther)
    {
        $this->responseCodeOther = $responseCodeOther;

        return $this;
    }

    /**
     * @return int
     */
    public function getResponseCode401()
    {
        return $this->responseCode401;
    }

    /**
     * @param int $responseCode401
     *
     * @return ApiHits
     */
    public function setResponseCode401($responseCode401)
    {
        $this->responseCode401 = $responseCode401;

        return $this;
    }


    /**
     * Increase Count
     *
     * @return ApiHits
     */
    public function countIncrease()
    {
        $this->count++;

        return $this;
    }

    /**
     * Response Code Increase
     *
     * @param int $responseStatusCode
     *
     * @return ApiHits
     */
    public function responseCodeIncrease($responseStatusCode)
    {
        $var = sprintf('responseCode%d', $responseStatusCode);

        if (false === isset($this->$var)) {
            $this->responseCodeOther++;
        }

        $this->$var++;

        return $this;
    }

    /**
     * Get Response codes available
     *
     * @return array
     */
    public static function getResponseCodesAvailable()
    {
        return MixedHelper::getConstantValuesByPrefix(self::class, 'RESPONSE_CODE_');
    }
}

