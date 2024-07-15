<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 12.07.2017
 * Time: 09:05
 */

namespace PM\PlentyMarketsBundle\Component\Model\Base;

use JMS\Serializer\Annotation as JMS;

/**
 * Class BaseVat
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Base
 */
#[JMS\ExclusionPolicy('ALL')]
class BaseVat
{
    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $vatField;

    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $vatAmount;

    /**
     * @var float
     */
    #[JMS\Type('float')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $value;

    /**
     * @return int
     */
    public function getVatField()
    {
        return $this->vatField;
    }

    /**
     * @param int $vatField
     *
     * @return BaseVat
     */
    public function setVatField($vatField)
    {
        $this->vatField = $vatField;

        return $this;
    }

    /**
     * @return int
     */
    public function getVatAmount()
    {
        return $this->vatAmount;
    }

    /**
     * @param int $vatAmount
     *
     * @return BaseVat
     */
    public function setVatAmount($vatAmount)
    {
        $this->vatAmount = $vatAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param float $value
     *
     * @return BaseVat
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }


}