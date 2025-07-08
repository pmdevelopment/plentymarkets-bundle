<?php

namespace PM\PlentyMarketsBundle\Component\Model\Order;

use JMS\Serializer\Annotation as JMS;

#[JMS\ExclusionPolicy('ALL')]
class ParcelServiceName
{
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $id;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $lang;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $name;

    #[JMS\Type('string')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $parcelServiceId;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getLang()
    {
        return $this->lang;
    }

    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getParcelServiceId()
    {
        return $this->parcelServiceId;
    }

    public function setParcelServiceId($parcelServiceId)
    {
        $this->parcelServiceId = $parcelServiceId;
        return $this;
    }
}