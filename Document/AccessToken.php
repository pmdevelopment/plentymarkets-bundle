<?php

namespace PM\PlentyMarketsBundle\Document;

use DateTimeImmutable;
use DateTimeInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use PM\PlentyMarketsBundle\DocumentRepository\AccessTokenRepository;

#[MongoDB\Document(repositoryClass: AccessTokenRepository::class, collection: 'PmPlentyAccessToken')]
class AccessToken
{
    #[MongoDB\Id]
    private ?string $id = null;

    #[MongoDB\Field(type: 'string')]
    private string $api;

    #[MongoDB\Field(type: 'string')]
    private string $token;

    #[MongoDB\Field(type: 'date_immutable', nullable: false)]
    private DateTimeInterface $created;

    #[MongoDB\Field(type: 'date_immutable', nullable: false)]
    private DateTimeInterface $validUntil;

    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setApi(string $api): AccessToken
    {
        $this->api = $api;

        return $this;
    }

    public function getApi(): string
    {
        return $this->api;
    }

    public function setToken(string $token): AccessToken
    {
        $this->token = $token;

        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setCreated(DateTimeInterface $created): AccessToken
    {
        $this->created = $created;

        return $this;
    }

    public function getCreated(): DateTimeInterface
    {
        return $this->created;
    }

    public function setValidUntil(DateTimeInterface $validUntil): AccessToken
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    public function getValidUntil(): DateTimeInterface
    {
        return $this->validUntil;
    }
}

