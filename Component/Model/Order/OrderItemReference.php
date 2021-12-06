<?php

namespace PM\PlentyMarketsBundle\Component\Model\Order;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\ExclusionPolicy("ALL")
 */
class OrderItemReference
{
    public const TYPE_BUNDLE = 'bundle';

    /**
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private int $id;

    /**
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private int $orderItemId;

    /**
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private int $referenceOrderItemId;

    /**
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private string $referenceType;

    /**
     * @JMS\Type("DateTime")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private DateTimeInterface $createdAt;

    /**
     * @JMS\Type("DateTime")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private DateTimeInterface $updatedAt;


    public function getId(): int
    {
        return $this->id;
    }

    public function getOrderItemId(): int
    {
        return $this->orderItemId;
    }

    public function setOrderItemId(int $orderItemId): OrderItemReference
    {
        $this->orderItemId = $orderItemId;

        return $this;
    }

    public function getReferenceOrderItemId(): int
    {
        return $this->referenceOrderItemId;
    }

    public function setReferenceOrderItemId(int $referenceOrderItemId): OrderItemReference
    {
        $this->referenceOrderItemId = $referenceOrderItemId;

        return $this;
    }

    public function getReferenceType(): string
    {
        return $this->referenceType;
    }

    public function setReferenceType(string $referenceType): OrderItemReference
    {
        $this->referenceType = $referenceType;

        return $this;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): OrderItemReference
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTimeInterface $updatedAt): OrderItemReference
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}