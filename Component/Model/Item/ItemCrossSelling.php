<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 12.07.2017
 * Time: 11:15
 */

namespace PM\PlentyMarketsBundle\Component\Model\Item;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ItemCrossSelling
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Item
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class ItemCrossSelling
{
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
    private $crossItemId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $relationship;

    /**
     * @var boolean
     *
     * @JMS\Type("boolean")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $isDynamic;

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
     * @return ItemCrossSelling
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * @return int
     */
    public function getCrossItemId()
    {
        return $this->crossItemId;
    }

    /**
     * @param int $crossItemId
     *
     * @return ItemCrossSelling
     */
    public function setCrossItemId($crossItemId)
    {
        $this->crossItemId = $crossItemId;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param string $relationship
     *
     * @return ItemCrossSelling
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsDynamic()
    {
        return $this->isDynamic;
    }

    /**
     * @param boolean $isDynamic
     *
     * @return ItemCrossSelling
     */
    public function setIsDynamic($isDynamic)
    {
        $this->isDynamic = $isDynamic;

        return $this;
    }

}