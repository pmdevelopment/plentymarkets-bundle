<?php


namespace PM\PlentyMarketsBundle\Component\Model\Item;

use JMS\Serializer\Annotation as JMS;

class ItemVariationSupplier
{
    /**
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private int $id;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $variationId;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $supplierId;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $purchasePrice;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $minimumPurchase;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $itemNumber;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $lastPriceQuery;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $deliveryTimeInDays;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $discount;

    /**
     * @var boolean
     *
     * @JMS\Type("boolean")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $isDiscountable;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $packagingUnit;

    /**
     * @var \DateTime
     *
     * @JMS\Type("DateTime")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $lastUpdateTimestamp;

    /**
     * @var \DateTime
     *
     * @JMS\Type("DateTime")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $createdAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return ItemVariationSupplier
     */
    public function setId(int $id): ItemVariationSupplier
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getVariationId(): int
    {
        return $this->variationId;
    }

    /**
     * @param int $variationId
     *
     * @return ItemVariationSupplier
     */
    public function setVariationId(int $variationId): ItemVariationSupplier
    {
        $this->variationId = $variationId;

        return $this;
    }

    /**
     * @return int
     */
    public function getSupplierId(): int
    {
        return $this->supplierId;
    }

    /**
     * @param int $supplierId
     *
     * @return ItemVariationSupplier
     */
    public function setSupplierId(int $supplierId): ItemVariationSupplier
    {
        $this->supplierId = $supplierId;

        return $this;
    }

    /**
     * @return float
     */
    public function getPurchasePrice(): float
    {
        return $this->purchasePrice;
    }

    /**
     * @param float $purchasePrice
     *
     * @return ItemVariationSupplier
     */
    public function setPurchasePrice(float $purchasePrice): ItemVariationSupplier
    {
        $this->purchasePrice = $purchasePrice;

        return $this;
    }

    /**
     * @return int
     */
    public function getMinimumPurchase(): int
    {
        return $this->minimumPurchase;
    }

    /**
     * @param int $minimumPurchase
     *
     * @return ItemVariationSupplier
     */
    public function setMinimumPurchase(int $minimumPurchase): ItemVariationSupplier
    {
        $this->minimumPurchase = $minimumPurchase;

        return $this;
    }

    /**
     * @return string
     */
    public function getItemNumber(): string
    {
        return $this->itemNumber;
    }

    /**
     * @param string $itemNumber
     *
     * @return ItemVariationSupplier
     */
    public function setItemNumber(string $itemNumber): ItemVariationSupplier
    {
        $this->itemNumber = $itemNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastPriceQuery(): string
    {
        return $this->lastPriceQuery;
    }

    /**
     * @param string $lastPriceQuery
     *
     * @return ItemVariationSupplier
     */
    public function setLastPriceQuery(string $lastPriceQuery): ItemVariationSupplier
    {
        $this->lastPriceQuery = $lastPriceQuery;

        return $this;
    }

    /**
     * @return int
     */
    public function getDeliveryTimeInDays(): int
    {
        return $this->deliveryTimeInDays;
    }

    /**
     * @param int $deliveryTimeInDays
     *
     * @return ItemVariationSupplier
     */
    public function setDeliveryTimeInDays(int $deliveryTimeInDays): ItemVariationSupplier
    {
        $this->deliveryTimeInDays = $deliveryTimeInDays;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     *
     * @return ItemVariationSupplier
     */
    public function setDiscount(float $discount): ItemVariationSupplier
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDiscountable(): bool
    {
        return $this->isDiscountable;
    }

    /**
     * @param bool $isDiscountable
     *
     * @return ItemVariationSupplier
     */
    public function setIsDiscountable(bool $isDiscountable): ItemVariationSupplier
    {
        $this->isDiscountable = $isDiscountable;

        return $this;
    }

    /**
     * @return int
     */
    public function getPackagingUnit(): int
    {
        return $this->packagingUnit;
    }

    /**
     * @param int $packagingUnit
     *
     * @return ItemVariationSupplier
     */
    public function setPackagingUnit(int $packagingUnit): ItemVariationSupplier
    {
        $this->packagingUnit = $packagingUnit;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdateTimestamp(): \DateTime
    {
        return $this->lastUpdateTimestamp;
    }

    /**
     * @param \DateTime $lastUpdateTimestamp
     *
     * @return ItemVariationSupplier
     */
    public function setLastUpdateTimestamp(\DateTime $lastUpdateTimestamp): ItemVariationSupplier
    {
        $this->lastUpdateTimestamp = $lastUpdateTimestamp;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return ItemVariationSupplier
     */
    public function setCreatedAt(\DateTime $createdAt): ItemVariationSupplier
    {
        $this->createdAt = $createdAt;

        return $this;
    }

}