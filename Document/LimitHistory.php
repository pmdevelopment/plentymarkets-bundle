<?php

namespace PM\PlentyMarketsBundle\Document;

use DateTime;
use DateTimeInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use PM\PlentyMarketsBundle\DocumentRepository\LimitHistoryRepository;

#[MongoDB\Document(repositoryClass: LimitHistoryRepository::class, collection: 'PmPlentyLimitHistory')]
class LimitHistory
{
    #[MongoDB\Id]
    private string $id = '';

    #[MongoDB\Field(type: 'string')]
    private string $api;

    #[MongoDB\Field(type: 'string')]
    private string $path;

    #[MongoDB\Field(type: 'date_immutable', nullable: false)]
    private DateTimeInterface $day;

    #[MongoDB\Field(type: 'int')]
    private int $longPeriodTotal;

    #[MongoDB\Field(type: 'int')]
    private int $longPeriodMinimum;

    #[MongoDB\Field(type: 'int')]
    private int $longPeriodException;

    #[MongoDB\Field(type: 'int')]
    private int $longPeriodLatest;

    #[MongoDB\Field(type: 'int')]
    private int $shortPeriodTotal;

    #[MongoDB\Field(type: 'int')]
    private int $shortPeriodMinimum;

    #[MongoDB\Field(type: 'int')]
    private int $shortPeriodException;

    #[MongoDB\Field(type: 'int')]
    private int $shortPeriodLatest;

    #[MongoDB\Field(type: 'date_immutable', nullable: false)]
    private DateTimeInterface $updated;

    public function __construct()
    {
        $this
            ->setLongPeriodException(0)
            ->setShortPeriodException(0);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setDay(DateTimeInterface $day): LimitHistory
    {
        $this->day = $day;

        return $this;
    }

    public function getDay(): DateTimeInterface
    {
        return $this->day;
    }

    public function setLongPeriodTotal(int $longPeriodTotal): LimitHistory
    {
        $this->longPeriodTotal = $longPeriodTotal;

        return $this;
    }

    public function getLongPeriodTotal(): int
    {
        return $this->longPeriodTotal;
    }

    public function setLongPeriodMinimum(int $longPeriodMinimum): LimitHistory
    {
        $this->longPeriodMinimum = $longPeriodMinimum;

        return $this;
    }

    public function getLongPeriodMinimum(): int
    {
        return $this->longPeriodMinimum;
    }

    public function setLongPeriodException(int $longPeriodException): LimitHistory
    {
        $this->longPeriodException = $longPeriodException;

        return $this;
    }

    public function getLongPeriodException(): int
    {
        return $this->longPeriodException;
    }

    public function setShortPeriodTotal(int $shortPeriodTotal): LimitHistory
    {
        $this->shortPeriodTotal = $shortPeriodTotal;

        return $this;
    }

    public function getShortPeriodTotal(): int
    {
        return $this->shortPeriodTotal;
    }

    public function setShortPeriodMinimum(int $shortPeriodMinimum): LimitHistory
    {
        $this->shortPeriodMinimum = $shortPeriodMinimum;

        return $this;
    }

    public function getShortPeriodMinimum():int
    {
        return $this->shortPeriodMinimum;
    }

    public function setShortPeriodException(int $shortPeriodException):LimitHistory
    {
        $this->shortPeriodException = $shortPeriodException;

        return $this;
    }

    public function getShortPeriodException():int
    {
        return $this->shortPeriodException;
    }

    public function setApi(string $api):LimitHistory
    {
        $this->api = $api;

        return $this;
    }

    public function getApi():string
    {
        return $this->api;
    }

    public function getUpdated():DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(DateTimeInterface $updated):LimitHistory
    {
        $this->updated = $updated;

        return $this;
    }

    public function getLongPeriodLatest():int
    {
        return $this->longPeriodLatest;
    }

    public function setLongPeriodLatest(int $longPeriodLatest):LimitHistory
    {
        $this->longPeriodLatest = $longPeriodLatest;

        return $this;
    }

    public function getShortPeriodLatest(): int
    {
        return $this->shortPeriodLatest;
    }

    public function setShortPeriodLatest(int $shortPeriodLatest):LimitHistory
    {
        $this->shortPeriodLatest = $shortPeriodLatest;

        return $this;
    }

    public function getPath():string
    {
        return $this->path;
    }

    public function setPath(string $path):LimitHistory
    {
        $this->path = $path;

        return $this;
    }
}

