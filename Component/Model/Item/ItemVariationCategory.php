<?php


namespace PM\PlentyMarketsBundle\Component\Model\Item;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ItemVariationSalesPrice
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Item
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class ItemVariationCategory
{
    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $variationId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $categoryId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $position;

    /**
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $isNeckermannPrimary;

    /**
     * @return int
     */
    public function getVariationId(): int
    {
        return $this->variationId;
    }

    /**
     * @param int $variationId
     *
     * @return ItemVariationCategory
     */
    public function setVariationId(int $variationId): ItemVariationCategory
    {
        $this->variationId = $variationId;

        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     *
     * @return ItemVariationCategory
     */
    public function setCategoryId(int $categoryId): ItemVariationCategory
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return ItemVariationCategory
     */
    public function setPosition(int $position): ItemVariationCategory
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return bool
     */
    public function isNeckermannPrimary(): bool
    {
        return $this->isNeckermannPrimary;
    }

    /**
     * @param bool $isNeckermannPrimary
     *
     * @return ItemVariationCategory
     */
    public function setIsNeckermannPrimary(bool $isNeckermannPrimary): ItemVariationCategory
    {
        $this->isNeckermannPrimary = $isNeckermannPrimary;

        return $this;
    }

}