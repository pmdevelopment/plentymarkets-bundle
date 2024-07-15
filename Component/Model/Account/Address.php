<?php


namespace PM\PlentyMarketsBundle\Component\Model\Account;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Address
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Account
 */
#[JMS\ExclusionPolicy('ALL')]
class Address
{
    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $id;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $gender;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $name1;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $name2;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $name3;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $name4;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $address1;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $address2;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $address3;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $address4;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $postalCode;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $town;

    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $countryId;

    /**
     * @var DateTime
     */
    #[JMS\Type('DateTime')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $checkedAt;

    /**
     * @var DateTime
     */
    #[JMS\Type('DateTime')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $createdAt;

    /**
     * @var DateTime
     */
    #[JMS\Type('DateTime')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $updatedAt;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Address
     */
    public function setId(int $id): Address
    {
        $this->id = $id;

        return $this;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return Address
     */
    public function setGender(string $gender): Address
    {
        $this->gender = $gender;

        return $this;
    }

    public function getName1(): string
    {
        return $this->name1;
    }

    /**
     * @return Address
     */
    public function setName1(string $name1): Address
    {
        $this->name1 = $name1;

        return $this;
    }

    public function getName2(): string
    {
        return $this->name2;
    }

    /**
     * @return Address
     */
    public function setName2(string $name2): Address
    {
        $this->name2 = $name2;

        return $this;
    }

    public function getName3(): string
    {
        return $this->name3;
    }

    /**
     * @return Address
     */
    public function setName3(string $name3): Address
    {
        $this->name3 = $name3;

        return $this;
    }

    public function getName4(): string
    {
        return $this->name4;
    }

    /**
     * @return Address
     */
    public function setName4(string $name4): Address
    {
        $this->name4 = $name4;

        return $this;
    }

    public function getAddress1(): string
    {
        return $this->address1;
    }

    /**
     * @return Address
     */
    public function setAddress1(string $address1): Address
    {
        $this->address1 = $address1;

        return $this;
    }

    public function getAddress2(): string
    {
        return $this->address2;
    }

    /**
     * @return Address
     */
    public function setAddress2(string $address2): Address
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getAddress3(): string
    {
        return $this->address3;
    }

    /**
     * @return Address
     */
    public function setAddress3(string $address3): Address
    {
        $this->address3 = $address3;

        return $this;
    }

    public function getAddress4(): string
    {
        return $this->address4;
    }

    /**
     * @return Address
     */
    public function setAddress4(string $address4): Address
    {
        $this->address4 = $address4;

        return $this;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @return Address
     */
    public function setPostalCode(string $postalCode): Address
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getTown(): string
    {
        return $this->town;
    }

    /**
     * @return Address
     */
    public function setTown(string $town): Address
    {
        $this->town = $town;

        return $this;
    }

    public function getCountryId(): int
    {
        return $this->countryId;
    }

    /**
     * @return Address
     */
    public function setCountryId(int $countryId): Address
    {
        $this->countryId = $countryId;

        return $this;
    }

    public function getCheckedAt(): DateTime
    {
        return $this->checkedAt;
    }

    /**
     * @return Address
     */
    public function setCheckedAt(DateTime $checkedAt): Address
    {
        $this->checkedAt = $checkedAt;

        return $this;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return Address
     */
    public function setCreatedAt(DateTime $createdAt): Address
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @return Address
     */
    public function setUpdatedAt(DateTime $updatedAt): Address
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}