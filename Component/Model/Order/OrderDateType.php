<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 05.09.2017
 * Time: 15:36
 */

namespace PM\PlentyMarketsBundle\Component\Model\Order;

use JMS\Serializer\Annotation as JMS;
use PM\PlentyMarketsBundle\Component\Traits\HasConstantsTrait;

/**
 * Class OrderDateType
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Order
 */
#[JMS\ExclusionPolicy('ALL')]
class OrderDateType
{
    use HasConstantsTrait;

    const TYPE_DELETED = 1;
    const TYPE_CREATED = 2;
    const TYPE_PAID = 3;
    const TYPE_LAST_UPDATE = 4;
    const TYPE_COMPLETED = 5;
    const TYPE_RETURN = 6;
    const TYPE_PAYMENT_DUE = 7;
    const TYPE_SHIPPING_ESTIMATED = 8;
    const TYPE_START = 9;
    const TYPE_END = 10;
    const TYPE_DELIVERY_POSSIBLE = 11;
    const TYPE_MARKET_TRANSFER = 12;

    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $id;

    /**
     * @var boolean
     */
    #[JMS\Type('boolean')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $isErasable;

    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $position;

    /**
     * @var array|OrderDateTypeName[]
     */
    #[JMS\Type('array<PM\PlentyMarketsBundle\Component\Model\Order\OrderDateTypeName>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $names;

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
     * @return OrderDateType
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsErasable()
    {
        return $this->isErasable;
    }

    /**
     * @param boolean $isErasable
     *
     * @return OrderDateType
     */
    public function setIsErasable($isErasable)
    {
        $this->isErasable = $isErasable;

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
     * @return OrderDateType
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return OrderDateTypeName[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param OrderDateTypeName[] $names
     *
     * @return OrderDateType
     */
    public function setNames($names)
    {
        $this->names = $names;

        return $this;
    }
}