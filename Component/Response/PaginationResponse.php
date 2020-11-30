<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 12.07.2017
 * Time: 11:30
 */

namespace PM\PlentyMarketsBundle\Component\Response;

use JMS\Serializer\Annotation as JMS;

/**
 * Class PaginationResponse
 *
 * @package PM\PlentyMarketsBundle\Component\Response
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class PaginationResponse
{

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $page;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $totalsCount;

    /**
     * @var boolean
     *
     * @JMS\Type("boolean")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $isLastPage;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $lastPageNumber;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $firstOnPage;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $lastOnPage;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $itemsPerPage;

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     *
     * @return PaginationResponse
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalsCount()
    {
        return $this->totalsCount;
    }

    /**
     * @param int $totalsCount
     *
     * @return PaginationResponse
     */
    public function setTotalsCount($totalsCount)
    {
        $this->totalsCount = $totalsCount;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsLastPage()
    {
        return $this->isLastPage;
    }

    /**
     * @param boolean $isLastPage
     *
     * @return PaginationResponse
     */
    public function setIsLastPage($isLastPage)
    {
        $this->isLastPage = $isLastPage;

        return $this;
    }

    /**
     * @return int
     */
    public function getLastPageNumber()
    {
        return $this->lastPageNumber;
    }

    /**
     * @param int $lastPageNumber
     *
     * @return PaginationResponse
     */
    public function setLastPageNumber($lastPageNumber)
    {
        $this->lastPageNumber = $lastPageNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getFirstOnPage()
    {
        return $this->firstOnPage;
    }

    /**
     * @param int $firstOnPage
     *
     * @return PaginationResponse
     */
    public function setFirstOnPage($firstOnPage)
    {
        $this->firstOnPage = $firstOnPage;

        return $this;
    }

    /**
     * @return int
     */
    public function getLastOnPage()
    {
        return $this->lastOnPage;
    }

    /**
     * @param int $lastOnPage
     *
     * @return PaginationResponse
     */
    public function setLastOnPage($lastOnPage)
    {
        $this->lastOnPage = $lastOnPage;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    /**
     * @param int $itemsPerPage
     *
     * @return PaginationResponse
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;

        return $this;
    }

}