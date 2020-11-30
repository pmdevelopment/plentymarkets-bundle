<?php
/**
 * Created by PhpStorm.
 * Date: 31.08.2017
 * Time: 16:08
 */

namespace PM\PlentyMarketsBundle\Component\Model\Item;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ItemVariationStock
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Item
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class ItemVariationStock
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $itemId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $variationId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $warehouseId;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $purchasePrice;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $reservedListing;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $reservedBundles;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $physicalStock;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $reservedStock;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $netStock;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $reorderLevel;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $deltaReorderLevel;

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
     * @return ItemVariationStock
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

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
     * @return ItemVariationStock
     */
    public function setVariationId($variationId)
    {
        $this->variationId = $variationId;

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
     * @return ItemVariationStock
     */
    public function setWarehouseId($warehouseId)
    {
        $this->warehouseId = $warehouseId;

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
     * @return ItemVariationStock
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getReservedListing()
    {
        return $this->reservedListing;
    }

    /**
     * @param float $reservedListing
     *
     * @return ItemVariationStock
     */
    public function setReservedListing($reservedListing)
    {
        $this->reservedListing = $reservedListing;

        return $this;
    }

    /**
     * @return float
     */
    public function getReservedBundles()
    {
        return $this->reservedBundles;
    }

    /**
     * @param float $reservedBundles
     *
     * @return ItemVariationStock
     */
    public function setReservedBundles($reservedBundles)
    {
        $this->reservedBundles = $reservedBundles;

        return $this;
    }

    /**
     * @return float
     */
    public function getPhysicalStock()
    {
        return $this->physicalStock;
    }

    /**
     * @param float $physicalStock
     *
     * @return ItemVariationStock
     */
    public function setPhysicalStock($physicalStock)
    {
        $this->physicalStock = $physicalStock;

        return $this;
    }

    /**
     * @return float
     */
    public function getReservedStock()
    {
        return $this->reservedStock;
    }

    /**
     * @param float $reservedStock
     *
     * @return ItemVariationStock
     */
    public function setReservedStock($reservedStock)
    {
        $this->reservedStock = $reservedStock;

        return $this;
    }

    /**
     * @return float
     */
    public function getNetStock()
    {
        return $this->netStock;
    }

    /**
     * @param float $netStock
     *
     * @return ItemVariationStock
     */
    public function setNetStock($netStock)
    {
        $this->netStock = $netStock;

        return $this;
    }

    /**
     * @return float
     */
    public function getReorderLevel()
    {
        return $this->reorderLevel;
    }

    /**
     * @param float $reorderLevel
     *
     * @return ItemVariationStock
     */
    public function setReorderLevel($reorderLevel)
    {
        $this->reorderLevel = $reorderLevel;

        return $this;
    }

    /**
     * @return float
     */
    public function getDeltaReorderLevel()
    {
        return $this->deltaReorderLevel;
    }

    /**
     * @param float $deltaReorderLevel
     *
     * @return ItemVariationStock
     */
    public function setDeltaReorderLevel($deltaReorderLevel)
    {
        $this->deltaReorderLevel = $deltaReorderLevel;

        return $this;
    }

}