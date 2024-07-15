<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 19.03.2018
 * Time: 10:25
 */

namespace PM\PlentyMarketsBundle\Component\Model\Item;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class SalesPrice
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Item
 */
#[JMS\ExclusionPolicy('ALL')]
class SalesPrice
{
    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $id;

    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $position;

    /**
     * @var float
     */
    #[JMS\Type('float')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $minimumOrderQuantity;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $type;

    /**
     * @var boolean
     */
    #[JMS\Type('boolean')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $isCustomerPrice;

    /**
     * @var boolean
     */
    #[JMS\Type('boolean')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $isDisplayedByDefault;

    /**
     * @var boolean
     */
    #[JMS\Type('boolean')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $isLiveConversion;

    /**
     * @var SalesPriceName[]
     */
    #[JMS\Type('array<PM\PlentyMarketsBundle\Component\Model\Item\SalesPriceName>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $names;

    /**
     * @var SalesPriceAccount[]
     */
    #[JMS\Type('array<PM\PlentyMarketsBundle\Component\Model\Item\SalesPriceAccount>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $accounts;

    /**
     * @var SalesPriceCountry[]
     */
    #[JMS\Type('array<PM\PlentyMarketsBundle\Component\Model\Item\SalesPriceCountry>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $countries;

    /**
     * @var SalesPriceCurrency[]
     */
    #[JMS\Type('array<PM\PlentyMarketsBundle\Component\Model\Item\SalesPriceCurrency>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $currencies;

    /**
     * @var SalesPriceCustomerClass[]
     */
    #[JMS\Type('array<PM\PlentyMarketsBundle\Component\Model\Item\SalesPriceCustomerClass>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $customerClasses;

    /**
     * @var SalesPriceReferrer[]
     */
    #[JMS\Type('array<PM\PlentyMarketsBundle\Component\Model\Item\SalesPriceReferrer>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $referrers;

    /**
     * @var SalesPriceOnlineStore[]
     */
    #[JMS\Type('array<PM\PlentyMarketsBundle\Component\Model\Item\SalesPriceOnlineStore>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $clients;

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
     * @return SalesPrice
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
     * @return SalesPrice
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return float
     */
    public function getMinimumOrderQuantity()
    {
        return $this->minimumOrderQuantity;
    }

    /**
     * @param float $minimumOrderQuantity
     *
     * @return SalesPrice
     */
    public function setMinimumOrderQuantity($minimumOrderQuantity)
    {
        $this->minimumOrderQuantity = $minimumOrderQuantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return SalesPrice
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCustomerPrice()
    {
        return $this->isCustomerPrice;
    }

    /**
     * @param bool $isCustomerPrice
     *
     * @return SalesPrice
     */
    public function setIsCustomerPrice($isCustomerPrice)
    {
        $this->isCustomerPrice = $isCustomerPrice;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDisplayedByDefault()
    {
        return $this->isDisplayedByDefault;
    }

    /**
     * @param bool $isDisplayedByDefault
     *
     * @return SalesPrice
     */
    public function setIsDisplayedByDefault($isDisplayedByDefault)
    {
        $this->isDisplayedByDefault = $isDisplayedByDefault;

        return $this;
    }

    /**
     * @return bool
     */
    public function isLiveConversion()
    {
        return $this->isLiveConversion;
    }

    /**
     * @param bool $isLiveConversion
     *
     * @return SalesPrice
     */
    public function setIsLiveConversion($isLiveConversion)
    {
        $this->isLiveConversion = $isLiveConversion;

        return $this;
    }

    /**
     * @return SalesPriceName[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * @param SalesPriceName[] $names
     *
     * @return SalesPrice
     */
    public function setNames($names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * @return SalesPriceAccount[]
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * @param SalesPriceAccount[] $accounts
     *
     * @return SalesPrice
     */
    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;

        return $this;
    }

    /**
     * @return SalesPriceCountry[]
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * @param SalesPriceCountry[] $countries
     *
     * @return SalesPrice
     */
    public function setCountries($countries)
    {
        $this->countries = $countries;

        return $this;
    }

    /**
     * @return SalesPriceCurrency[]
     */
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /**
     * @param SalesPriceCurrency[] $currencies
     *
     * @return SalesPrice
     */
    public function setCurrencies($currencies)
    {
        $this->currencies = $currencies;

        return $this;
    }

    /**
     * @return SalesPriceCustomerClass[]
     */
    public function getCustomerClasses()
    {
        return $this->customerClasses;
    }

    /**
     * @param SalesPriceCustomerClass[] $customerClasses
     *
     * @return SalesPrice
     */
    public function setCustomerClasses($customerClasses)
    {
        $this->customerClasses = $customerClasses;

        return $this;
    }

    /**
     * @return SalesPriceReferrer[]
     */
    public function getReferrers()
    {
        return $this->referrers;
    }

    /**
     * @param SalesPriceReferrer[] $referrers
     *
     * @return SalesPrice
     */
    public function setReferrers($referrers)
    {
        $this->referrers = $referrers;

        return $this;
    }

    /**
     * @return SalesPriceOnlineStore[]
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * @param SalesPriceOnlineStore[] $clients
     *
     * @return SalesPrice
     */
    public function setClients($clients)
    {
        $this->clients = $clients;

        return $this;
    }

    /**
     * Get Name By Language
     *
     * @param string $language
     *
     * @return null|SalesPriceName
     */
    public function getNameByLanguage($language)
    {
        foreach ($this->getNames() as $name) {
            if ($name->getLang() === $language) {
                return $name;
            }
        }

        return null;
    }
}