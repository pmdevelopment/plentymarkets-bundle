<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 14.07.2017
 * Time: 12:42
 */

namespace PM\PlentyMarketsBundle\Component\Model\Order;

use JMS\Serializer\Annotation as JMS;
use PM\PlentyMarketsBundle\Component\Model\Order\ParcelServiceName;
/**
 * Class OrderShippingPreset
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Order
 */
#[JMS\ExclusionPolicy('ALL')]
class OrderShippingPreset
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
    private $parcelServiceId;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $backendName;

    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $flag;

    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $priority;

    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $category;

    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $useArticlePorto;

    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $isInsured;

    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $isExpress;

    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $isPostident;

    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $isDefaultEnabled;

    /**
     * @var float
     */
    #[JMS\Type('float')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $islandFee;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $shippingGroup;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $dispatchIdentifier;

    /**
     * @var integer
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $auctionType;

    /**
     * Warning: string, not DateTime!
     *
     * @var string
     *      *
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $updatedAt;

    /**
     * @var array
     */
    #[JMS\Type('array<string>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $supportedMultishop;

    /**
     * @var array
     */
    #[JMS\Type('array<string>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $supportedReferrer;

    /**
     * @var array
     */
    #[JMS\Type('array<string>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $subreferrerSupport;

    /**
     * @var array
     */
    #[JMS\Type('array<string>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $excludedPaymentMethods;

    /**
     * @var array
     */
    #[JMS\Type('array<string>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $excludedCustomerGroups;

    /**
     * @var array
     */
    #[JMS\Type('array<string>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $supportedLoyaltyPrograms;

    /**
     * @var array
     */
    #[JMS\Type('array<PM\PlentyMarketsBundle\Component\Model\Order\ParcelServiceName>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $parcelServiceNames;


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
     * @return OrderShippingPreset
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getParcelServiceId()
    {
        return $this->parcelServiceId;
    }

    /**
     * @param int $parcelServiceId
     *
     * @return OrderShippingPreset
     */
    public function setParcelServiceId($parcelServiceId)
    {
        $this->parcelServiceId = $parcelServiceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBackendName()
    {
        return $this->backendName;
    }

    /**
     * @param string $backendName
     *
     * @return OrderShippingPreset
     */
    public function setBackendName($backendName)
    {
        $this->backendName = $backendName;

        return $this;
    }

    /**
     * @return int
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param int $flag
     *
     * @return OrderShippingPreset
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     *
     * @return OrderShippingPreset
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     *
     * @return OrderShippingPreset
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return int
     */
    public function getUseArticlePorto()
    {
        return $this->useArticlePorto;
    }

    /**
     * @param int $useArticlePorto
     *
     * @return OrderShippingPreset
     */
    public function setUseArticlePorto($useArticlePorto)
    {
        $this->useArticlePorto = $useArticlePorto;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsInsured()
    {
        return $this->isInsured;
    }

    /**
     * @param int $isInsured
     *
     * @return OrderShippingPreset
     */
    public function setIsInsured($isInsured)
    {
        $this->isInsured = $isInsured;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsExpress()
    {
        return $this->isExpress;
    }

    /**
     * @param int $isExpress
     *
     * @return OrderShippingPreset
     */
    public function setIsExpress($isExpress)
    {
        $this->isExpress = $isExpress;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsPostident()
    {
        return $this->isPostident;
    }

    /**
     * @param int $isPostident
     *
     * @return OrderShippingPreset
     */
    public function setIsPostident($isPostident)
    {
        $this->isPostident = $isPostident;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsDefaultEnabled()
    {
        return $this->isDefaultEnabled;
    }

    /**
     * @param int $isDefaultEnabled
     *
     * @return OrderShippingPreset
     */
    public function setIsDefaultEnabled($isDefaultEnabled)
    {
        $this->isDefaultEnabled = $isDefaultEnabled;

        return $this;
    }

    /**
     * @return float
     */
    public function getIslandFee()
    {
        return $this->islandFee;
    }

    /**
     * @param float $islandFee
     *
     * @return OrderShippingPreset
     */
    public function setIslandFee($islandFee)
    {
        $this->islandFee = $islandFee;

        return $this;
    }

    /**
     * @return string
     */
    public function getShippingGroup()
    {
        return $this->shippingGroup;
    }

    /**
     * @param string $shippingGroup
     *
     * @return OrderShippingPreset
     */
    public function setShippingGroup($shippingGroup)
    {
        $this->shippingGroup = $shippingGroup;

        return $this;
    }

    /**
     * @return string
     */
    public function getDispatchIdentifier()
    {
        return $this->dispatchIdentifier;
    }

    /**
     * @param string $dispatchIdentifier
     *
     * @return OrderShippingPreset
     */
    public function setDispatchIdentifier($dispatchIdentifier)
    {
        $this->dispatchIdentifier = $dispatchIdentifier;

        return $this;
    }

    /**
     * @return int
     */
    public function getAuctionType()
    {
        return $this->auctionType;
    }

    /**
     * @param int $auctionType
     *
     * @return OrderShippingPreset
     */
    public function setAuctionType($auctionType)
    {
        $this->auctionType = $auctionType;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     *
     * @return OrderShippingPreset
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return array
     */
    public function getSupportedMultishop()
    {
        return $this->supportedMultishop;
    }

    /**
     * @param array $supportedMultishop
     *
     * @return OrderShippingPreset
     */
    public function setSupportedMultishop($supportedMultishop)
    {
        $this->supportedMultishop = $supportedMultishop;

        return $this;
    }

    /**
     * @return array
     */
    public function getSupportedReferrer()
    {
        return $this->supportedReferrer;
    }

    /**
     * @param array $supportedReferrer
     *
     * @return OrderShippingPreset
     */
    public function setSupportedReferrer($supportedReferrer)
    {
        $this->supportedReferrer = $supportedReferrer;

        return $this;
    }

    /**
     * @return array
     */
    public function getSubreferrerSupport()
    {
        return $this->subreferrerSupport;
    }

    /**
     * @param array $subreferrerSupport
     *
     * @return OrderShippingPreset
     */
    public function setSubreferrerSupport($subreferrerSupport)
    {
        $this->subreferrerSupport = $subreferrerSupport;

        return $this;
    }

    /**
     * @return array
     */
    public function getExcludedPaymentMethods()
    {
        return $this->excludedPaymentMethods;
    }

    /**
     * @param array $excludedPaymentMethods
     *
     * @return OrderShippingPreset
     */
    public function setExcludedPaymentMethods($excludedPaymentMethods)
    {
        $this->excludedPaymentMethods = $excludedPaymentMethods;

        return $this;
    }

    /**
     * @return array
     */
    public function getExcludedCustomerGroups()
    {
        return $this->excludedCustomerGroups;
    }

    /**
     * @param array $excludedCustomerGroups
     *
     * @return OrderShippingPreset
     */
    public function setExcludedCustomerGroups($excludedCustomerGroups)
    {
        $this->excludedCustomerGroups = $excludedCustomerGroups;

        return $this;
    }

    /**
     * @return array
     */
    public function getSupportedLoyaltyPrograms()
    {
        return $this->supportedLoyaltyPrograms;
    }

    /**
     * @param array $supportedLoyaltyPrograms
     *
     * @return OrderShippingPreset
     */
    public function setSupportedLoyaltyPrograms($supportedLoyaltyPrograms)
    {
        $this->supportedLoyaltyPrograms = $supportedLoyaltyPrograms;

        return $this;
    }

    public function getParcelServiceNames(): array
    {
        return $this->parcelServiceNames;
    }

    public function setParcelServiceNames(array $parcelServiceNames): OrderShippingPreset
    {
        $this->parcelServiceNames = $parcelServiceNames;
        return $this;
    }
}