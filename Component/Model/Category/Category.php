<?php


namespace PM\PlentyMarketsBundle\Component\Model\Category;

use JMS\Serializer\Annotation as JMS;
use LogicException;

/**
 * Class Category
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Category
 * @JMS\ExclusionPolicy("ALL")
 *
 * @TODO    Include all properties
 */
class Category
{
    public const TYPE_ITEM = 'item';

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $id;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $parentCategoryId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $level;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $type;


    /**
     * @var array|CategoryDetail[]
     *
     * @JMS\Type("array<PM\PlentyMarketsBundle\Component\Model\Category\CategoryDetail>")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $details;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Category
     */
    public function setId(int $id): Category
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getParentCategoryId(): ?int
    {
        return $this->parentCategoryId;
    }

    /**
     * @param int|null $parentCategoryId
     *
     * @return Category
     */
    public function setParentCategoryId(?int $parentCategoryId): Category
    {
        $this->parentCategoryId = $parentCategoryId;

        return $this;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     *
     * @return Category
     */
    public function setLevel(int $level): Category
    {
        $this->level = $level;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return Category
     */
    public function setType(string $type): Category
    {
        $this->type = $type;

        return $this;
    }


    /**
     * @return array|CategoryDetail[]
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param array|CategoryDetail[] $details
     *
     * @return Category
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get Detail
     *
     * @param string $language
     *
     * @return CategoryDetail
     */
    public function getDetailByLanguage(string $language = 'de'): CategoryDetail
    {
        foreach ($this->getDetails() as $detail) {
            if ($language === $detail->getLang()) {
                return $detail;
            }
        }

        throw new LogicException(sprintf('Categors %d has no details for %s', $this->getId(), $language));
    }
}