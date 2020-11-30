<?php


namespace PM\PlentyMarketsBundle\Component\Model\Warehouses;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class LocationStock
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Warehouses
 */
class LocationStock
{

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $id;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     * @JMS\SerializedName("storage_location")
     */
    private $storageLocation;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     * @JMS\SerializedName("item_id")
     */
    private $itemId;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     * @JMS\SerializedName("attribute_value_set")
     */
    private $attributeValueSet;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     * @JMS\SerializedName("warehouse_id")
     */
    private $warehouseId;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $quantity;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $reserved;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     * @JMS\SerializedName("variation_id")
     */
    private $variationId;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     * @JMS\SerializedName("last_update")
     */
    private $lastUpdate;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $batchBestBeforeDateId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $name;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $fullLabel;

    /**
     * @var integer|null
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $warehouseLocationLevel;

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
     * @return LocationStock
     */
    public function setId(int $id): LocationStock
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getStorageLocation(): int
    {
        return $this->storageLocation;
    }

    /**
     * @param int $storageLocation
     *
     * @return LocationStock
     */
    public function setStorageLocation(int $storageLocation): LocationStock
    {
        $this->storageLocation = $storageLocation;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     *
     * @return LocationStock
     */
    public function setItemId(int $itemId): LocationStock
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * @return int
     */
    public function getAttributeValueSet(): int
    {
        return $this->attributeValueSet;
    }

    /**
     * @param int $attributeValueSet
     *
     * @return LocationStock
     */
    public function setAttributeValueSet(int $attributeValueSet): LocationStock
    {
        $this->attributeValueSet = $attributeValueSet;

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
     * @return LocationStock
     */
    public function setWarehouseId(int $warehouseId): LocationStock
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     *
     * @return LocationStock
     */
    public function setQuantity(float $quantity): LocationStock
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return float
     */
    public function getReserved(): float
    {
        return $this->reserved;
    }

    /**
     * @param float $reserved
     *
     * @return LocationStock
     */
    public function setReserved(float $reserved): LocationStock
    {
        $this->reserved = $reserved;

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
     * @return LocationStock
     */
    public function setVariationId(int $variationId): LocationStock
    {
        $this->variationId = $variationId;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLastUpdate(): DateTime
    {
        return $this->lastUpdate;
    }

    /**
     * @param DateTime $lastUpdate
     *
     * @return LocationStock
     */
    public function setLastUpdate(DateTime $lastUpdate): LocationStock
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * @return int
     */
    public function getBatchBestBeforeDateId(): int
    {
        return $this->batchBestBeforeDateId;
    }

    /**
     * @param int $batchBestBeforeDateId
     *
     * @return LocationStock
     */
    public function setBatchBestBeforeDateId(int $batchBestBeforeDateId): LocationStock
    {
        $this->batchBestBeforeDateId = $batchBestBeforeDateId;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return LocationStock
     */
    public function setName(string $name): LocationStock
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullLabel(): string
    {
        return $this->fullLabel;
    }

    /**
     * @param string $fullLabel
     *
     * @return LocationStock
     */
    public function setFullLabel(string $fullLabel): LocationStock
    {
        $this->fullLabel = $fullLabel;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getWarehouseLocationLevel(): ?int
    {
        return $this->warehouseLocationLevel;
    }

    /**
     * @param int|null $warehouseLocationLevel
     *
     * @return LocationStock
     */
    public function setWarehouseLocationLevel(?int $warehouseLocationLevel): LocationStock
    {
        $this->warehouseLocationLevel = $warehouseLocationLevel;

        return $this;
    }

}