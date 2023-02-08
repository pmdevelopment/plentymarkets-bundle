<?php

namespace PM\PlentyMarketsBundle\Component\Model\Fulfilment;

use JMS\Serializer\Annotation as JMS;

class PicklistFilterOptions
{
    #[JMS\Type("array")]
    private array $orderIds = [];

    public function getOrderIds(): array
    {
        return $this->orderIds;
    }

}