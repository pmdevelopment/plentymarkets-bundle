<?php

namespace PM\PlentyMarketsBundle\Document;

use DateTimeInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use PM\PlentyMarketsBundle\Component\Helper\MixedHelper;
use PM\PlentyMarketsBundle\DocumentRepository\ApiHitsRepository;


#[MongoDB\Document(repositoryClass: ApiHitsRepository::class, collection: 'PmPlentyApiHits')]
class ApiHits
{
    const RESPONSE_CODE_200 = '200';
    const RESPONSE_CODE_401 = '401';
    const RESPONSE_CODE_429 = '429';
    const RESPONSE_CODE_OTHER = 'other';

    #[MongoDB\Id]
    private ?string $id = null;

    #[MongoDB\Field(type: 'date_immutable', nullable: false)]
    private DateTimeInterface $day;

    #[MongoDB\Field(type: 'string')]
    private string $apiId;

    #[MongoDB\Field(type: 'int')]
    private int $count;

    #[MongoDB\Field(type: 'int')]
    private int $responseCode200;

    #[MongoDB\Field(type: 'int')]
    private int $responseCode401;

    #[MongoDB\Field(type: 'int')]
    private int $responseCode429;

    #[MongoDB\Field(type: 'int')]
    private int $responseCodeOther;

    public function __construct()
    {
        $this
            ->setCount(0)
            ->setResponseCode200(0)
            ->setResponseCode401(0)
            ->setResponseCode429(0)
            ->setResponseCodeOther(0);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setDay(DateTimeInterface $day): ApiHits
    {
        $this->day = $day;

        return $this;
    }

    public function getDay(): DateTimeInterface
    {
        return $this->day;
    }

    public function setApiId(string $apiId): ApiHits
    {
        $this->apiId = $apiId;

        return $this;
    }

    public function getApiId(): string
    {
        return $this->apiId;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): ApiHits
    {
        $this->count = $count;

        return $this;
    }

    public function getResponseCode200(): int
    {
        return $this->responseCode200;
    }

    public function setResponseCode200(int $responseCode200): ApiHits
    {
        $this->responseCode200 = $responseCode200;

        return $this;
    }

    public function getResponseCode429(): int
    {
        return $this->responseCode429;
    }

    public function setResponseCode429(int $responseCode429): ApiHits
    {
        $this->responseCode429 = $responseCode429;

        return $this;
    }

    public function getResponseCodeOther(): int
    {
        return $this->responseCodeOther;
    }

    public function setResponseCodeOther(int $responseCodeOther): ApiHits
    {
        $this->responseCodeOther = $responseCodeOther;

        return $this;
    }

    public function getResponseCode401(): int
    {
        return $this->responseCode401;
    }

    public function setResponseCode401(int $responseCode401): ApiHits
    {
        $this->responseCode401 = $responseCode401;

        return $this;
    }

    public function countIncrease(): ApiHits
    {
        $this->count++;

        return $this;
    }

    public function responseCodeIncrease(int $responseStatusCode): ApiHits
    {
        $var = sprintf('responseCode%d', $responseStatusCode);

        if (false === isset($this->$var)) {
            $this->responseCodeOther++;
        }

        $this->$var++;

        return $this;
    }

    public static function getResponseCodesAvailable(): array
    {
        return MixedHelper::getConstantValuesByPrefix(self::class, 'RESPONSE_CODE_');
    }
}

