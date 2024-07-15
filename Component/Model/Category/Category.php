<?php


namespace PM\PlentyMarketsBundle\Component\Model\Category;

use JMS\Serializer\Annotation as JMS;
use LogicException;

/**
 * Class Category
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Category
 *
 * @TODO    Include all properties
 */
#[JMS\ExclusionPolicy('ALL')]
class Category
{
    public const TYPE_ITEM = 'item';

    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $id;

    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $parentCategoryId;

    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $level;

    /**
     * @var string
     */
    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $type;


    /**
     * @var array|CategoryDetail[]
     */
    #[JMS\Type('array<PM\PlentyMarketsBundle\Component\Model\Category\CategoryDetail>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $details;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Category
     */
    public function setId(int $id): Category
    {
        $this->id = $id;

        return $this;
    }

    public function getParentCategoryId(): ?int
    {
        return $this->parentCategoryId;
    }

    /**
     * @return Category
     */
    public function setParentCategoryId(?int $parentCategoryId): Category
    {
        $this->parentCategoryId = $parentCategoryId;

        return $this;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @return Category
     */
    public function setLevel(int $level): Category
    {
        $this->level = $level;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    /**
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