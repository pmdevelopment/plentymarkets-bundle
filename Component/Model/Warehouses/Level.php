<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 19.11.2018
 * Time: 11:16
 */

namespace PM\PlentyMarketsBundle\Component\Model\Warehouses;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Level
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Warehouses
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class Level
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
     * @var integer|null
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $parentId;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $dimensionId;

    /**
     * @var integer
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
    private $pathName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $pickupPathPosition;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $name;

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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Level
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param int|null $parentId
     *
     * @return Level
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * @return int
     */
    public function getDimensionId()
    {
        return $this->dimensionId;
    }

    /**
     * @param int $dimensionId
     *
     * @return Level
     */
    public function setDimensionId($dimensionId)
    {
        $this->dimensionId = $dimensionId;

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
     * @return Level
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return string
     */
    public function getPathName()
    {
        return $this->pathName;
    }

    /**
     * @param string $pathName
     *
     * @return Level
     */
    public function setPathName($pathName)
    {
        $this->pathName = $pathName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPickupPathPosition()
    {
        return $this->pickupPathPosition;
    }

    /**
     * @param string $pickupPathPosition
     *
     * @return Level
     */
    public function setPickupPathPosition($pickupPathPosition)
    {
        $this->pickupPathPosition = $pickupPathPosition;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Level
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * @return Level
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
     * @return Level
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}