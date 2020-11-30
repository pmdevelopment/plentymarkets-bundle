<?php

namespace PM\PlentyMarketsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccessToken
 *
 * @ORM\Table(name="pm_plenty_markets_access_token", indexes={@ORM\Index(name="idx_api",columns={"api"})})
 * @ORM\Entity(repositoryClass="PM\PlentyMarketsBundle\Repository\AccessTokenRepository")
 */
class AccessToken
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="api", type="string", length=20)
     */
    private $api;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="text")
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_until", type="datetime")
     */
    private $validUntil;


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
     * Set api
     *
     * @param string $api
     *
     * @return AccessToken
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

    /**
     * Set token
     *
     * @param string $token
     *
     * @return AccessToken
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return AccessToken
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set validUntil
     *
     * @param \DateTime $validUntil
     *
     * @return AccessToken
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
}

