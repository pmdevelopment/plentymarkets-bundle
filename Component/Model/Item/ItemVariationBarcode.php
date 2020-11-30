<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 30.11.2018
 * Time: 14:51
 */

namespace PM\PlentyMarketsBundle\Component\Model\Item;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ItemVariationBarcode
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Item
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class ItemVariationBarcode
{
    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $barcodeId;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $variationId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $code;

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
    public function getBarcodeId()
    {
        return $this->barcodeId;
    }

    /**
     * @param int $barcodeId
     *
     * @return ItemVariationBarcode
     */
    public function setBarcodeId($barcodeId)
    {
        $this->barcodeId = $barcodeId;

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
     * @return ItemVariationBarcode
     */
    public function setVariationId($variationId)
    {
        $this->variationId = $variationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return ItemVariationBarcode
     */
    public function setCode($code)
    {
        $this->code = $code;

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
     * @return ItemVariationBarcode
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }


}