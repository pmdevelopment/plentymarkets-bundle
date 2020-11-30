<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 13.07.2017
 * Time: 10:40
 */

namespace PM\PlentyMarketsBundle\Component\Model\Payment;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PaymentMethod
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Payment
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class PaymentMethod
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $id;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $pluginKey;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $paymentKey;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $name;

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
     * @return PaymentMethod
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getPluginKey()
    {
        return $this->pluginKey;
    }

    /**
     * @param string $pluginKey
     *
     * @return PaymentMethod
     */
    public function setPluginKey($pluginKey)
    {
        $this->pluginKey = $pluginKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentKey()
    {
        return $this->paymentKey;
    }

    /**
     * @param string $paymentKey
     *
     * @return PaymentMethod
     */
    public function setPaymentKey($paymentKey)
    {
        $this->paymentKey = $paymentKey;

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
     * @return PaymentMethod
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

}