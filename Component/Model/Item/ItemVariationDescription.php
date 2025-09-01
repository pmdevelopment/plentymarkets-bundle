<?php

namespace PM\PlentyMarketsBundle\Component\Model\Item;

use JMS\Serializer\Annotation as JMS;

#[JMS\ExclusionPolicy('ALL')]
class ItemVariationDescription
{
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?int $id = null;

    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?int $itemId = null;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?string $lang = null;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?string $name = null;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?string $name2 = null;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?string $name3 = null;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?string $previewDescription = null;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?string $metaDescription = null;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?string $description = null;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?string $technicalData = null;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?string $urlPath = null;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?string $metaKeywords = null;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private ?string $title = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): ItemVariationDescription
    {
        $this->id = $id;

        return $this;
    }

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function setItemId(?int $itemId): ItemVariationDescription
    {
        $this->itemId = $itemId;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(?string $lang): ItemVariationDescription
    {
        $this->lang = $lang;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): ItemVariationDescription
    {
        $this->name = $name;

        return $this;
    }

    public function getName2(): ?string
    {
        return $this->name2;
    }

    public function setName2(?string $name2): ItemVariationDescription
    {
        $this->name2 = $name2;

        return $this;
    }

    public function getName3(): ?string
    {
        return $this->name3;
    }

    public function setName3(?string $name3): ItemVariationDescription
    {
        $this->name3 = $name3;

        return $this;
    }

    public function getPreviewDescription(): ?string
    {
        return $this->previewDescription;
    }

    public function setPreviewDescription(?string $previewDescription): ItemVariationDescription
    {
        $this->previewDescription = $previewDescription;

        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): ItemVariationDescription
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): ItemVariationDescription
    {
        $this->description = $description;

        return $this;
    }

    public function getTechnicalData(): ?string
    {
        return $this->technicalData;
    }

    public function setTechnicalData(?string $technicalData): ItemVariationDescription
    {
        $this->technicalData = $technicalData;

        return $this;
    }

    public function getUrlPath(): ?string
    {
        return $this->urlPath;
    }

    public function setUrlPath(?string $urlPath): ItemVariationDescription
    {
        $this->urlPath = $urlPath;

        return $this;
    }

    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    public function setMetaKeywords(?string $metaKeywords): ItemVariationDescription
    {
        $this->metaKeywords = $metaKeywords;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): ItemVariationDescription
    {
        $this->title = $title;

        return $this;
    }

}