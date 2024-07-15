<?php

namespace PM\PlentyMarketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApiLock
 */
#[ORM\Table(name: 'pm_plenty_markets_api_lock')]
#[ORM\Index(name: 'api_lock_idx_api', columns: ['api'])]
#[ORM\Entity(repositoryClass: \PM\PlentyMarketsBundle\Repository\ApiLockRepository::class)]
class ApiLock
{
    public const TYPE_LIMIT_LOCK_PERCENTAGE = 'limit_lock';
    public const TYPE_LIMIT_SHORT_LOCK_PERCENTAGE = 'limit_lock_short';

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'integer')]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    private $id;

    /**
     * @var string
     */
    #[ORM\Column(name: 'api', type: 'string', length: 20)]
    private $api;

    /**
     * @var string
     */
    #[ORM\Column(name: 'type', type: 'string', length: 20)]
    private $type;

    /**
     * @var string
     */
    #[ORM\Column(name: 'description', type: 'string', length: 255)]
    private $description = '';

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'valid_from', type: 'datetime')]
    private $validFrom;

    /**
     * @var \DateTime
     */
    #[ORM\Column(name: 'valid_until', type: 'datetime', nullable: true)]
    private $validUntil;

    /**
     * @var bool
     */
    #[ORM\Column(name: 'deleted', type: 'boolean')]
    private $deleted = false;

    /**
     * ApiLock constructor.
     */
    public function __construct()
    {
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return ApiLock
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set validFrom
     *
     * @param \DateTime $validFrom
     *
     * @return ApiLock
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * Get validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Set validUntil
     *
     * @param \DateTime $validUntil
     *
     * @return ApiLock
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * Get validUntil
     *
     * @return \DateTime
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return ApiLock
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return ApiLock
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set api
     *
     * @param string $api
     *
     * @return ApiLock
     */
    public function setApi($api)
    {
        $this->api = $api;

        return $this;
    }

    /**
     * Get api
     *
     * @return string
     */
    public function getApi()
    {
        return $this->api;
    }
}

