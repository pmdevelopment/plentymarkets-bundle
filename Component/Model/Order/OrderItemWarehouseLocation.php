<?php

namespace PM\PlentyMarketsBundle\Component\Model\Order;

use JMS\Serializer\Annotation as JMS;

class OrderItemWarehouseLocation
{

    #[JMS\Type("integer")]
    private int $orderItemId;

    #[JMS\Type("integer")]
    private int $quantity;

    #[JMS\Type("integer")]
    private int $warehouseLocationId;

    #[JMS\Type("integer")]
    private int $batchBestBeforeDateId;

    #[JMS\Type("integer")]
    private int $originalQuantity;

    #[JMS\Type("string")]
    private string $batch;

    #[JMS\Type("string")]
    private string $bestBeforeDate;

    public function getOrderItemId(): int
    {
        return $this->orderItemId;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getWarehouseLocationId(): int
    {
        return $this->warehouseLocationId;
    }

    public function getBatchBestBeforeDateId(): int
    {
        return $this->batchBestBeforeDateId;
    }

    public function getOriginalQuantity(): int
    {
        return $this->originalQuantity;
    }

    public function getBatch(): string
    {
        return $this->batch;
    }

    public function getBestBeforeDate(): string
    {
        return $this->bestBeforeDate;
    }

}