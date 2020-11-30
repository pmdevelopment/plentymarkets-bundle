<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 10.12.2018
 * Time: 14:34
 */

namespace PM\PlentyMarketsBundle\Component\Model\Item;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ItemImageName
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Item
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class ItemImageName
{
    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $imageId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $lang;

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
    private $alternate;

    /**
     * @return int
     */
    public function getImageId()
    {
        return $this->imageId;
    }

    /**
     * @param int $imageId
     *
     * @return ItemImageName
     */
    public function setImageId($imageId)
    {
        $this->imageId = $imageId;

        return $this;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     *
     * @return ItemImageName
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

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
     * @return ItemImageName
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getAlternate()
    {
        return $this->alternate;
    }

    /**
     * @param string $alternate
     *
     * @return ItemImageName
     */
    public function setAlternate($alternate)
    {
        $this->alternate = $alternate;

        return $this;
    }

}