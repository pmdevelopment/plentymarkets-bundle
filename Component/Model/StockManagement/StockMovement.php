<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 09.01.2019
 * Time: 14:55
 */

namespace PM\PlentyMarketsBundle\Component\Model\StockManagement;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class StockMovement
 *
 * @package PM\PlentyMarketsBundle\Component\Model\StockManagement
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class StockMovement
{
    const PROCESS_ROW_TYPE_INCOMING = 1;
    const PROCESS_ROW_TYPE_ORDER = 2;

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
     */
    private $processRowId;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $itemId;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $warehouseId;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $reason;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $userId;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $processRowType;

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
    private $variationId;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $quantity;


    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Since("1.0")
     * @JMS\Expose()
     */
    private $reasonString;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Since("1.0")
     * @JMS\Expose()
     */
    private $attributeValues;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Since("1.0")
     * @JMS\Expose()
     */
    private $warehouseName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Since("1.0")
     * @JMS\Expose()
     */
    private $storageLocationName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Since("1.0")
     * @JMS\Expose()
     */
    private $batch;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Since("1.0")
     * @JMS\Expose()
     */
    private $bestBeforeDate;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $createdAt;

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
     * @return StockMovement
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getProcessRowId()
    {
        return $this->processRowId;
    }

    /**
     * @param int $processRowId
     *
     * @return StockMovement
     */
    public function setProcessRowId($processRowId)
    {
        $this->processRowId = $processRowId;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     *
     * @return StockMovement
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->warehouseId;
    }

    /**
     * @param int $warehouseId
     *
     * @return StockMovement
     */
    public function setWarehouseId($warehouseId)
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }

    /**
     * @return int
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param int $reason
     *
     * @return StockMovement
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     *
     * @return StockMovement
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return int
     */
    public function getProcessRowType()
    {
        return $this->processRowType;
    }

    /**
     * @param int $processRowType
     *
     * @return StockMovement
     */
    public function setProcessRowType($processRowType)
    {
        $this->processRowType = $processRowType;

        return $this;
    }

    /**
     * @return float
     */
    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

    /**
     * @param float $purchasePrice
     *
     * @return StockMovement
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;

        return $this;
    }

    /**
     * @return int
     */
    public function getVariationId()
    {
        return $this->variationId;
    }

    /**
     * @param int $variationId
     *
     * @return StockMovement
     */
    public function setVariationId($variationId)
    {
        $this->variationId = $variationId;

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
     * @return StockMovement
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getReasonString()
    {
        return $this->reasonString;
    }

    /**
     * @param string $reasonString
     *
     * @return StockMovement
     */
    public function setReasonString($reasonString)
    {
        $this->reasonString = $reasonString;

        return $this;
    }

    /**
     * @return string
     */
    public function getAttributeValues()
    {
        return $this->attributeValues;
    }

    /**
     * @param string $attributeValues
     *
     * @return StockMovement
     */
    public function setAttributeValues($attributeValues)
    {
        $this->attributeValues = $attributeValues;

        return $this;
    }

    /**
     * @return string
     */
    public function getWarehouseName()
    {
        return $this->warehouseName;
    }

    /**
     * @param string $warehouseName
     *
     * @return StockMovement
     */
    public function setWarehouseName($warehouseName)
    {
        $this->warehouseName = $warehouseName;

        return $this;
    }

    /**
     * @return string
     */
    public function getStorageLocationName()
    {
        return $this->storageLocationName;
    }

    /**
     * @param string $storageLocationName
     *
     * @return StockMovement
     */
    public function setStorageLocationName($storageLocationName)
    {
        $this->storageLocationName = $storageLocationName;

        return $this;
    }

    /**
     * @return string
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * @param string $batch
     *
     * @return StockMovement
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;

        return $this;
    }

    /**
     * @return string
     */
    public function getBestBeforeDate()
    {
        return $this->bestBeforeDate;
    }

    /**
     * @param string $bestBeforeDate
     *
     * @return StockMovement
     */
    public function setBestBeforeDate($bestBeforeDate)
    {
        $this->bestBeforeDate = $bestBeforeDate;

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
     * @return StockMovement
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

}