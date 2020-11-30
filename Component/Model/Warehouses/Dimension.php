<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 19.11.2018
 * Time: 11:19
 */

namespace PM\PlentyMarketsBundle\Component\Model\Warehouses;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Dimension
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Warehouses
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class Dimension
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
     */
    private $parentId;

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
    private $level;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $name;

    /**
     * @var boolean
     *
     * @JMS\Type("boolean")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $displayInName;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $shortcut;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $separator;


    /**
     * @var boolean
     *
     * @JMS\Type("boolean")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $isActiveForPickupPath;

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
     * @return Dimension
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * @param int $parentId
     *
     * @return Dimension
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

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
     * @return Dimension
     */
    public function setWarehouseId($warehouseId)
    {
        $this->warehouseId = $warehouseId;

        return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     *
     * @return Dimension
     */
    public function setLevel($level)
    {
        $this->level = $level;

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
     * @return Dimension
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDisplayInName()
    {
        return $this->displayInName;
    }

    /**
     * @param bool $displayInName
     *
     * @return Dimension
     */
    public function setDisplayInName($displayInName)
    {
        $this->displayInName = $displayInName;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortcut()
    {
        return $this->shortcut;
    }

    /**
     * @param string $shortcut
     *
     * @return Dimension
     */
    public function setShortcut($shortcut)
    {
        $this->shortcut = $shortcut;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeparator()
    {
        return $this->separator;
    }

    /**
     * @param string $separator
     *
     * @return Dimension
     */
    public function setSeparator($separator)
    {
        $this->separator = $separator;

        return $this;
    }

    /**
     * @return bool
     */
    public function isActiveForPickupPath()
    {
        return $this->isActiveForPickupPath;
    }

    /**
     * @param bool $isActiveForPickupPath
     *
     * @return Dimension
     */
    public function setIsActiveForPickupPath($isActiveForPickupPath)
    {
        $this->isActiveForPickupPath = $isActiveForPickupPath;

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
     * @return Dimension
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
     * @return Dimension
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}