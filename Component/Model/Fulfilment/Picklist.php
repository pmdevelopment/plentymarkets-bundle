<?php

namespace PM\PlentyMarketsBundle\Component\Model\Fulfilment;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;

class Picklist
{
    #[JMS\Type("integer")]
    private readonly int $id;

    #[JMS\Type("DateTime")]
    private readonly DateTimeInterface $createdAt;

    #[JMS\Type("DateTime")]
    private ?DateTimeInterface $processDate = null;

    #[JMS\Type("DateTime")]
    private ?DateTimeInterface $doneDate = null;

    #[JMS\Type("integer")]
    private readonly int $ownerId;

    #[JMS\Type("integer")]
    private ?int $processUserId = null;

    #[JMS\Type("string")]
    private string $processState = '';

    #[JMS\Type(PicklistFilterOptions::class)]
    private readonly PicklistFilterOptions $filterOptions;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getProcessDate(): ?DateTimeInterface
    {
        return $this->processDate;
    }

    public function getDoneDate(): ?DateTimeInterface
    {
        return $this->doneDate;
    }

    public function getOwnerId(): int
    {
        return $this->ownerId;
    }

    public function getProcessUserId(): ?int
    {
        return $this->processUserId;
    }

    public function getProcessState(): string
    {
        return $this->processState;
    }

    public function getFilterOptions(): PicklistFilterOptions
    {
        return $this->filterOptions;
    }

}