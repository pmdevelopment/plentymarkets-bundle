<?php


namespace PM\PlentyMarketsBundle\Component\Model\Backend;

use JMS\Serializer\Annotation as JMS;

/**
 * Class User
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Backend
 */
#[JMS\ExclusionPolicy('ALL')]
class User
{
    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $id = 0;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $realName = '';

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $email = '';

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function setId(int $id): User
    {
        $this->id = $id;

        return $this;
    }

    public function getRealName(): string
    {
        return $this->realName;
    }

    /**
     * @return User
     */
    public function setRealName(string $realName): User
    {
        $this->realName = $realName;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;

        return $this;
    }

}