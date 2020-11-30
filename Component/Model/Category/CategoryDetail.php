<?php


namespace PM\PlentyMarketsBundle\Component\Model\Category;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CategoryDetail
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Category
 * @JMS\ExclusionPolicy("ALL")
 *
 * @TODO    Include all properties
 */
class CategoryDetail
{

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $categoryId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $lang;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $name;

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
     * @return CategoryDetail
     */
    public function setCategoryId(int $categoryId): CategoryDetail
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     *
     * @return CategoryDetail
     */
    public function setLang(string $lang): CategoryDetail
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return CategoryDetail
     */
    public function setName(string $name): CategoryDetail
    {
        $this->name = $name;

        return $this;
    }

}