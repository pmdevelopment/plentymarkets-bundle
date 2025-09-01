<?php

namespace PM\PlentyMarketsBundle\Component\Model\Item;

use DateTime;
use JMS\Serializer\Annotation as JMS;

#[JMS\ExclusionPolicy('ALL')]
class ItemVariationBarcode
{
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?int $barcodeId = null;

    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?int $variationId = null;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?string $code = null;

    #[JMS\Type('DateTime')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?DateTime $createdAt = null;

    public function getBarcodeId(): ?int
    {
        return $this->barcodeId;
    }

    public function setBarcodeId(?int $barcodeId): ItemVariationBarcode
    {
        $this->barcodeId = $barcodeId;

        return $this;
    }

    public function getVariationId(): ?int
    {
        return $this->variationId;
    }

    public function setVariationId(?int $variationId): ItemVariationBarcode
    {
        $this->variationId = $variationId;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): ItemVariationBarcode
    {
        $this->code = $code;

        return $this;
    }

    public function getCreatedAt(): ?DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?DateTime $createdAt): ItemVariationBarcode
    {
        $this->createdAt = $createdAt;

        return $this;
    }

}