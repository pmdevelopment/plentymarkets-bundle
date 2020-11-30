<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 12.07.2017
 * Time: 11:32
 */

namespace PM\PlentyMarketsBundle\Component\Response;

use JMS\Serializer\Annotation as JMS;
use PM\PlentyMarketsBundle\Component\Model\Item\ItemVariation;

/**
 * Class ItemsResponse
 *
 * @package PM\PlentyMarketsBundle\Component\Response
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class ItemsVariationsResponse extends PaginationResponse
{
    /**
     * @var ItemVariation[]
     *
     * @JMS\Type("array<PM\PlentyMarketsBundle\Component\Model\Item\ItemVariation>")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $entries;

    /**
     * @return ItemVariation[]
     */
    public function getEntries(): array
    {
        return $this->entries;
    }

    /**
     * @param ItemVariation[] $entries
     *
     * @return ItemsVariationsResponse
     */
    public function setEntries($entries)
    {
        $this->entries = $entries;

        return $this;
    }

}