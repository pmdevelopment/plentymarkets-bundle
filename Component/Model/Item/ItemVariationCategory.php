<?php


namespace PM\PlentyMarketsBundle\Component\Model\Item;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ItemVariationSalesPrice
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Item
 */
#[JMS\ExclusionPolicy('ALL')]
class ItemVariationCategory
{
    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $variationId;

    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $categoryId;

    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $position;

    /**
     * @var bool
     */
    #[JMS\Type('boolean')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $isNeckermannPrimary;

    public function getVariationId(): int
    {
        return $this->variationId;
    }

    /**
     * @return ItemVariationCategory
     */
    public function setVariationId(int $variationId): ItemVariationCategory
    {
        $this->variationId = $variationId;

        return $this;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @return ItemVariationCategory
     */
    public function setCategoryId(int $categoryId): ItemVariationCategory
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @return ItemVariationCategory
     */
    public function setPosition(int $position): ItemVariationCategory
    {
        $this->position = $position;

        return $this;
    }

    public function isNeckermannPrimary(): bool
    {
        return $this->isNeckermannPrimary;
    }

    /**
     * @return ItemVariationCategory
     */
    public function setIsNeckermannPrimary(bool $isNeckermannPrimary): ItemVariationCategory
    {
        $this->isNeckermannPrimary = $isNeckermannPrimary;

        return $this;
    }

}