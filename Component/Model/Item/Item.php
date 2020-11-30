<?php

namespace PM\PlentyMarketsBundle\Component\Model\Item;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Item
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Item
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class Item
{
    public const FIELD_FREE2 = 'free2';

    public const REASON_INCOMING_ITEMS = 101;

    public const REASON_STOCK_CORRECTION = 301;
    public const REASON_STOCK_CORRECTION_STOCKTAKING = 302;
    public const REASON_STOCK_CORRECTION_PACKING_ERROR = 306;

    public const REASON_STOCK_REDISTRIBUTE = 401;

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
    private $position;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $itemType;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $stockType;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $storeSpecial;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $ownerId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $manufacturerId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $producingCountryId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $mainVariationId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $customsTariffNumber;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $revenueAccount;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $couponRestriction;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $condition;


    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $conditionApi;


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
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $isSubscribable;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $isSerialNumber;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $amazonFbaPlatform;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $isShippableByAmazon;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $amazonProductType;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $amazonFedas;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $ebayPresetId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $ebayCategory;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $ebayCategory2;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $ebayStoreCategory;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $ebayStoreCategory2;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $rakutenCategoryId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $flagOne;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $flagTwo;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $ageRestriction;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $feedback;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free1;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free2;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free3;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free4;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free5;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free6;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free7;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free8;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free9;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free10;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free11;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free12;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free13;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free14;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free15;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free16;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free17;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free18;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free19;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $free20;

    /**
     * @var ItemText[]
     *
     * @JMS\Type("array<PM\PlentyMarketsBundle\Component\Model\Item\ItemText>")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $texts;

    /**
     * @var ItemCrossSelling[]
     *
     * @JMS\Type("array<PM\PlentyMarketsBundle\Component\Model\Item\ItemCrossSelling>")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $itemCrossSelling;

    /**
     * @var ItemVariation[]
     *
     * @JMS\Type("array<PM\PlentyMarketsBundle\Component\Model\Item\ItemVariation>")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $variations;

    /**
     * @var ItemImage[]
     *
     * @JMS\Type("array<PM\PlentyMarketsBundle\Component\Model\Item\ItemImage>")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $itemImages;

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
     * @return Item
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return Item
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return string
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * @param string $itemType
     *
     * @return Item
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;

        return $this;
    }

    /**
     * @return int
     */
    public function getStockType()
    {
        return $this->stockType;
    }

    /**
     * @param int $stockType
     *
     * @return Item
     */
    public function setStockType($stockType)
    {
        $this->stockType = $stockType;

        return $this;
    }

    /**
     * @return int
     */
    public function getStoreSpecial()
    {
        return $this->storeSpecial;
    }

    /**
     * @param int $storeSpecial
     *
     * @return Item
     */
    public function setStoreSpecial($storeSpecial)
    {
        $this->storeSpecial = $storeSpecial;

        return $this;
    }

    /**
     * @return int
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * @param int $ownerId
     *
     * @return Item
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * @return int
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * @param int $manufacturerId
     *
     * @return Item
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    /**
     * @return int
     */
    public function getProducingCountryId()
    {
        return $this->producingCountryId;
    }

    /**
     * @param int $producingCountryId
     *
     * @return Item
     */
    public function setProducingCountryId($producingCountryId)
    {
        $this->producingCountryId = $producingCountryId;

        return $this;
    }

    /**
     * @return int
     */
    public function getMainVariationId()
    {
        return $this->mainVariationId;
    }

    /**
     * @param int $mainVariationId
     *
     * @return Item
     */
    public function setMainVariationId($mainVariationId)
    {
        $this->mainVariationId = $mainVariationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomsTariffNumber()
    {
        return $this->customsTariffNumber;
    }

    /**
     * @param string $customsTariffNumber
     *
     * @return Item
     */
    public function setCustomsTariffNumber($customsTariffNumber)
    {
        $this->customsTariffNumber = $customsTariffNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getRevenueAccount()
    {
        return $this->revenueAccount;
    }

    /**
     * @param int $revenueAccount
     *
     * @return Item
     */
    public function setRevenueAccount($revenueAccount)
    {
        $this->revenueAccount = $revenueAccount;

        return $this;
    }

    /**
     * @return int
     */
    public function getCouponRestriction()
    {
        return $this->couponRestriction;
    }

    /**
     * @param int $couponRestriction
     *
     * @return Item
     */
    public function setCouponRestriction($couponRestriction)
    {
        $this->couponRestriction = $couponRestriction;

        return $this;
    }

    /**
     * @return int
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param int $condition
     *
     * @return Item
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }

    /**
     * @return int
     */
    public function getConditionApi()
    {
        return $this->conditionApi;
    }

    /**
     * @param int $conditionApi
     *
     * @return Item
     */
    public function setConditionApi($conditionApi)
    {
        $this->conditionApi = $conditionApi;

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
     * @return Item
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
     * @return Item
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsSubscribable()
    {
        return $this->isSubscribable;
    }

    /**
     * @param boolean $isSubscribable
     *
     * @return Item
     */
    public function setIsSubscribable($isSubscribable)
    {
        $this->isSubscribable = $isSubscribable;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsSerialNumber()
    {
        return $this->isSerialNumber;
    }

    /**
     * @param boolean $isSerialNumber
     *
     * @return Item
     */
    public function setIsSerialNumber($isSerialNumber)
    {
        $this->isSerialNumber = $isSerialNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getAmazonFbaPlatform()
    {
        return $this->amazonFbaPlatform;
    }

    /**
     * @param int $amazonFbaPlatform
     *
     * @return Item
     */
    public function setAmazonFbaPlatform($amazonFbaPlatform)
    {
        $this->amazonFbaPlatform = $amazonFbaPlatform;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsShippableByAmazon()
    {
        return $this->isShippableByAmazon;
    }

    /**
     * @param boolean $isShippableByAmazon
     *
     * @return Item
     */
    public function setIsShippableByAmazon($isShippableByAmazon)
    {
        $this->isShippableByAmazon = $isShippableByAmazon;

        return $this;
    }

    /**
     * @return int
     */
    public function getAmazonProductType()
    {
        return $this->amazonProductType;
    }

    /**
     * @param int $amazonProductType
     *
     * @return Item
     */
    public function setAmazonProductType($amazonProductType)
    {
        $this->amazonProductType = $amazonProductType;

        return $this;
    }

    /**
     * @return string
     */
    public function getAmazonFedas()
    {
        return $this->amazonFedas;
    }

    /**
     * @param string $amazonFedas
     *
     * @return Item
     */
    public function setAmazonFedas($amazonFedas)
    {
        $this->amazonFedas = $amazonFedas;

        return $this;
    }

    /**
     * @return int
     */
    public function getEbayPresetId()
    {
        return $this->ebayPresetId;
    }

    /**
     * @param int $ebayPresetId
     *
     * @return Item
     */
    public function setEbayPresetId($ebayPresetId)
    {
        $this->ebayPresetId = $ebayPresetId;

        return $this;
    }

    /**
     * @return int
     */
    public function getEbayCategory()
    {
        return $this->ebayCategory;
    }

    /**
     * @param int $ebayCategory
     *
     * @return Item
     */
    public function setEbayCategory($ebayCategory)
    {
        $this->ebayCategory = $ebayCategory;

        return $this;
    }

    /**
     * @return int
     */
    public function getEbayCategory2()
    {
        return $this->ebayCategory2;
    }

    /**
     * @param int $ebayCategory2
     *
     * @return Item
     */
    public function setEbayCategory2($ebayCategory2)
    {
        $this->ebayCategory2 = $ebayCategory2;

        return $this;
    }

    /**
     * @return int
     */
    public function getEbayStoreCategory()
    {
        return $this->ebayStoreCategory;
    }

    /**
     * @param int $ebayStoreCategory
     *
     * @return Item
     */
    public function setEbayStoreCategory($ebayStoreCategory)
    {
        $this->ebayStoreCategory = $ebayStoreCategory;

        return $this;
    }

    /**
     * @return int
     */
    public function getEbayStoreCategory2()
    {
        return $this->ebayStoreCategory2;
    }

    /**
     * @param int $ebayStoreCategory2
     *
     * @return Item
     */
    public function setEbayStoreCategory2($ebayStoreCategory2)
    {
        $this->ebayStoreCategory2 = $ebayStoreCategory2;

        return $this;
    }

    /**
     * @return int
     */
    public function getRakutenCategoryId()
    {
        return $this->rakutenCategoryId;
    }

    /**
     * @param int $rakutenCategoryId
     *
     * @return Item
     */
    public function setRakutenCategoryId($rakutenCategoryId)
    {
        $this->rakutenCategoryId = $rakutenCategoryId;

        return $this;
    }

    /**
     * @return int
     */
    public function getFlagOne()
    {
        return $this->flagOne;
    }

    /**
     * @param int $flagOne
     *
     * @return Item
     */
    public function setFlagOne($flagOne)
    {
        $this->flagOne = $flagOne;

        return $this;
    }

    /**
     * @return int
     */
    public function getFlagTwo()
    {
        return $this->flagTwo;
    }

    /**
     * @param int $flagTwo
     *
     * @return Item
     */
    public function setFlagTwo($flagTwo)
    {
        $this->flagTwo = $flagTwo;

        return $this;
    }

    /**
     * @return int
     */
    public function getAgeRestriction()
    {
        return $this->ageRestriction;
    }

    /**
     * @param int $ageRestriction
     *
     * @return Item
     */
    public function setAgeRestriction($ageRestriction)
    {
        $this->ageRestriction = $ageRestriction;

        return $this;
    }

    /**
     * @return int
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * @param int $feedback
     *
     * @return Item
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree1()
    {
        return $this->free1;
    }

    /**
     * @param string $free1
     *
     * @return Item
     */
    public function setFree1($free1)
    {
        $this->free1 = $free1;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree2()
    {
        return $this->free2;
    }

    /**
     * @param string $free2
     *
     * @return Item
     */
    public function setFree2($free2)
    {
        $this->free2 = $free2;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree3()
    {
        return $this->free3;
    }

    /**
     * @param string $free3
     *
     * @return Item
     */
    public function setFree3($free3)
    {
        $this->free3 = $free3;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree4()
    {
        return $this->free4;
    }

    /**
     * @param string $free4
     *
     * @return Item
     */
    public function setFree4($free4)
    {
        $this->free4 = $free4;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree5()
    {
        return $this->free5;
    }

    /**
     * @param string $free5
     *
     * @return Item
     */
    public function setFree5($free5)
    {
        $this->free5 = $free5;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree6()
    {
        return $this->free6;
    }

    /**
     * @param string $free6
     *
     * @return Item
     */
    public function setFree6($free6)
    {
        $this->free6 = $free6;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree7()
    {
        return $this->free7;
    }

    /**
     * @param string $free7
     *
     * @return Item
     */
    public function setFree7($free7)
    {
        $this->free7 = $free7;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree8()
    {
        return $this->free8;
    }

    /**
     * @param string $free8
     *
     * @return Item
     */
    public function setFree8($free8)
    {
        $this->free8 = $free8;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree9()
    {
        return $this->free9;
    }

    /**
     * @param string $free9
     *
     * @return Item
     */
    public function setFree9($free9)
    {
        $this->free9 = $free9;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree10()
    {
        return $this->free10;
    }

    /**
     * @param string $free10
     *
     * @return Item
     */
    public function setFree10($free10)
    {
        $this->free10 = $free10;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree11()
    {
        return $this->free11;
    }

    /**
     * @param string $free11
     *
     * @return Item
     */
    public function setFree11($free11)
    {
        $this->free11 = $free11;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree12()
    {
        return $this->free12;
    }

    /**
     * @param string $free12
     *
     * @return Item
     */
    public function setFree12($free12)
    {
        $this->free12 = $free12;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree13()
    {
        return $this->free13;
    }

    /**
     * @param string $free13
     *
     * @return Item
     */
    public function setFree13($free13)
    {
        $this->free13 = $free13;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree14()
    {
        return $this->free14;
    }

    /**
     * @param string $free14
     *
     * @return Item
     */
    public function setFree14($free14)
    {
        $this->free14 = $free14;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree15()
    {
        return $this->free15;
    }

    /**
     * @param string $free15
     *
     * @return Item
     */
    public function setFree15($free15)
    {
        $this->free15 = $free15;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree16()
    {
        return $this->free16;
    }

    /**
     * @param string $free16
     *
     * @return Item
     */
    public function setFree16($free16)
    {
        $this->free16 = $free16;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree17()
    {
        return $this->free17;
    }

    /**
     * @param string $free17
     *
     * @return Item
     */
    public function setFree17($free17)
    {
        $this->free17 = $free17;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree18()
    {
        return $this->free18;
    }

    /**
     * @param string $free18
     *
     * @return Item
     */
    public function setFree18($free18)
    {
        $this->free18 = $free18;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree19()
    {
        return $this->free19;
    }

    /**
     * @param string $free19
     *
     * @return Item
     */
    public function setFree19($free19)
    {
        $this->free19 = $free19;

        return $this;
    }

    /**
     * @return string
     */
    public function getFree20()
    {
        return $this->free20;
    }

    /**
     * @param string $free20
     *
     * @return Item
     */
    public function setFree20($free20)
    {
        $this->free20 = $free20;

        return $this;
    }

    /**
     * @return ItemText[]
     */
    public function getTexts()
    {
        return $this->texts;
    }

    /**
     * @param ItemText[] $texts
     *
     * @return Item
     */
    public function setTexts($texts)
    {
        $this->texts = $texts;

        return $this;
    }

    /**
     * @return ItemCrossSelling[]
     */
    public function getItemCrossSelling()
    {
        return $this->itemCrossSelling;
    }

    /**
     * @param ItemCrossSelling[] $itemCrossSelling
     *
     * @return Item
     */
    public function setItemCrossSelling($itemCrossSelling)
    {
        $this->itemCrossSelling = $itemCrossSelling;

        return $this;
    }

    /**
     * @return ItemVariation[]
     */
    public function getVariations()
    {
        return $this->variations;
    }

    /**
     * @param ItemVariation[] $variations
     *
     * @return Item
     */
    public function setVariations($variations)
    {
        $this->variations = $variations;

        return $this;
    }

    /**
     * @return ItemImage[]
     */
    public function getItemImages()
    {
        return $this->itemImages;
    }

    /**
     * @param ItemImage[] $itemImages
     *
     * @return Item
     */
    public function setItemImages($itemImages)
    {
        $this->itemImages = $itemImages;

        return $this;
    }

}