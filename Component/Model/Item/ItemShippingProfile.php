<?php

namespace PM\PlentyMarketsBundle\Component\Model\Item;

use DateTimeInterface;
use JMS\Serializer\Annotation as JMS;

class ItemShippingProfile
{
    /**
     * @JMS\Type("integer")
     * @JMS\Since("1.0")
     */
    private int $id;

    /**
     * @JMS\Type("integer")
     * @JMS\Since("1.0")
     */
    private int $itemId;

    /**
     * @JMS\Type("integer")
     * @JMS\Since("1.0")
     */
    private int $profileId;

    /**
     * @JMS\Type("DateTime")
     * @JMS\Since("1.0")
     */
    private DateTimeInterface $updatedAt;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): ItemShippingProfile
    {
        $this->id = $id;

        return $this;
    }

    public function getItemId(): int
    {
        return $this->itemId;
    }

    public function setItemId(int $itemId): ItemShippingProfile
    {
        $this->itemId = $itemId;

        return $this;
    }

    public function getProfileId(): int
    {
        return $this->profileId;
    }

    public function setProfileId(int $profileId): ItemShippingProfile
    {
        $this->profileId = $profileId;

        return $this;
    }

    public function getUpdatedAt(): DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTimeInterface $updatedAt): ItemShippingProfile
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}