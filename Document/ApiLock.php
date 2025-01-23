<?php

namespace PM\PlentyMarketsBundle\Document;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use PM\PlentyMarketsBundle\DocumentRepository\ApiLockRepository;

#[MongoDB\Document(repositoryClass: ApiLockRepository::class, collection: 'PmPlentyApiLock')]
class ApiLock
{
    public const TYPE_LIMIT_LOCK_PERCENTAGE = 'limit_lock';
    public const TYPE_LIMIT_SHORT_LOCK_PERCENTAGE = 'limit_lock_short';

    #[MongoDB\Id]
    private ?string $id = null;

    #[MongoDB\Field(type: 'string')]
    private string $api;

    #[MongoDB\Field(type: 'string')]
    private string $type;

    #[MongoDB\Field(type: 'string')]
    private string $description = '';

    #[MongoDB\Field(type: 'date_immutable', nullable: false)]
    private DateTimeInterface $validFrom;

    #[MongoDB\Field(type: 'date_immutable', nullable: true)]
    private DateTimeInterface $validUntil;

    #[MongoDB\Field(type: 'bool')]
    private $deleted = false;

    public function getId(): string
    {
        return $this->id;
    }

    public function setType(string $type): ApiLock
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setValidFrom(DateTimeInterface $validFrom): ApiLock
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    public function getValidFrom(): DateTimeInterface
    {
        return $this->validFrom;
    }

    public function setValidUntil(DateTimeInterface $validUntil): ApiLock
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    public function getValidUntil(): DateTimeInterface
    {
        return $this->validUntil;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): ApiLock
    {
        $this->description = $description;

        return $this;
    }

    public function setDeleted(bool $deleted): ApiLock
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getDeleted(): bool
    {
        return $this->deleted;
    }

    public function setApi(string $api):ApiLock
    {
        $this->api = $api;

        return $this;
    }

    public function getApi():string
    {
        return $this->api;
    }
}

