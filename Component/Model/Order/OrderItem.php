<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 11.07.2017
 * Time: 13:02
 */

namespace PM\PlentyMarketsBundle\Component\Model\Order;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class OrderItem
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Order
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class OrderItem
{
    const TYPE_VARIATION = 1;
    const TYPE_BUNDLE = 2;
    const TYPE_BUNDLE_COMPONENT = 3;
    const TYPE_PROMOTIONAL_COUPON = 4;
    const TYPE_GIFT_CARD = 5;
    const TYPE_SHIPPING_COST = 6;
    const TYPE_PAYMENT_SURCHARGE = 7;
    const TYPE_GIFT_WRAP = 8;
    const TYPE_UNASSIGNED_VARIATION = 9;
    const TYPE_DEPOSIT = 10;
    const TYPE_ORDER = 11;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $id;
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $orderId;
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $typeId;
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $referrerId;
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $itemVariationId;
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $quantity;
    /**
     * @var int
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $orderItemName;
    /**
     * @var int
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $attributeValues;
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $shippingProfileId;
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $vatField;
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $vatRate;
    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $createdAt;
    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $updatedAt;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $warehouseId;

    /**
     * @var OrderItemAmount[]
     *
     * @JMS\Type("array<PM\PlentyMarketsBundle\Component\Model\Order\OrderItemAmount>")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $amounts;

    /**
     * @var OrderItemProperty[]
     *
     * @JMS\Type("array<PM\PlentyMarketsBundle\Component\Model\Order\OrderItemProperty>")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $properties;

    /**
     * @var OrderItemReference[]
     *
     * @JMS\Type("array<PM\PlentyMarketsBundle\Component\Model\Order\OrderItemReference>")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $references;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return OrderItem
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     *
     * @return OrderItem
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return int
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param int $typeId
     *
     * @return OrderItem
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return int
     */
    public function getReferrerId()
    {
        return $this->referrerId;
    }

    /**
     * @param int $referrerId
     *
     * @return OrderItem
     */
    public function setReferrerId($referrerId)
    {
        $this->referrerId = $referrerId;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemVariationId()
    {
        return $this->itemVariationId;
    }

    /**
     * @param int $itemVariationId
     *
     * @return OrderItem
     */
    public function setItemVariationId($itemVariationId)
    {
        $this->itemVariationId = $itemVariationId;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return OrderItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderItemName()
    {
        return $this->orderItemName;
    }

    /**
     * @param int $orderItemName
     *
     * @return OrderItem
     */
    public function setOrderItemName($orderItemName)
    {
        $this->orderItemName = $orderItemName;

        return $this;
    }

    /**
     * @return int
     */
    public function getAttributeValues()
    {
        return $this->attributeValues;
    }

    /**
     * @param int $attributeValues
     *
     * @return OrderItem
     */
    public function setAttributeValues($attributeValues)
    {
        $this->attributeValues = $attributeValues;

        return $this;
    }

    /**
     * @return int
     */
    public function getShippingProfileId()
    {
        return $this->shippingProfileId;
    }

    /**
     * @param int $shippingProfileId
     *
     * @return OrderItem
     */
    public function setShippingProfileId($shippingProfileId)
    {
        $this->shippingProfileId = $shippingProfileId;

        return $this;
    }

    /**
     * @return int
     */
    public function getVatField()
    {
        return $this->vatField;
    }

    /**
     * @param int $vatField
     *
     * @return OrderItem
     */
    public function setVatField($vatField)
    {
        $this->vatField = $vatField;

        return $this;
    }

    /**
     * @return int
     */
    public function getVatRate()
    {
        return $this->vatRate;
    }

    /**
     * @param int $vatRate
     *
     * @return OrderItem
     */
    public function setVatRate($vatRate)
    {
        $this->vatRate = $vatRate;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     *
     * @return OrderItem
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     *
     * @return OrderItem
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseId(): int
    {
        return $this->warehouseId;
    }

    /**
     * @param int $warehouseId
     *
     * @return OrderItem
     */
    public function setWarehouseId(int $warehouseId): OrderItem
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }

    /**
     * @return OrderItemAmount[]
     */
    public function getAmounts()
    {
        return $this->amounts;
    }

    /**
     * @param OrderItemAmount[] $amounts
     *
     * @return OrderItem
     */
    public function setAmounts($amounts)
    {
        $this->amounts = $amounts;

        return $this;
    }

    /**
     * @return OrderItemProperty[]
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param OrderItemProperty[] $properties
     *
     * @return OrderItem
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * @return OrderItemReference[]
     */
    public function getReferences(): array
    {
        return $this->references;
    }

    /**
     * @param OrderItemReference[] $references
     *
     * @return OrderItem
     */
    public function setReferences(array $references): OrderItem
    {
        $this->references = $references;

        return $this;
    }

    /**
     * Get Amount Euro
     *
     * @param $currency
     *
     * @return null|OrderItemAmount
     */
    public function getAmountByCurrency($currency)
    {
        foreach ($this->getAmounts() as $amount) {
            if ($currency === $amount->getCurrency()) {
                return $amount;
            }
        }

        return null;
    }

    /**
     * Get Property By Type Id
     *
     * @param int $typeId
     *
     * @return OrderItemProperty|null
     */
    public function getPropertyByTypeId($typeId)
    {
        if (false === is_array($this->properties)) {
            return null;
        }

        foreach ($this->getProperties() as $property) {
            if ($typeId === $property->getTypeId()) {
                return $property;
            }
        }

        return null;
    }
}