<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 08.03.2018
 * Time: 10:17
 */

namespace PM\PlentyMarketsBundle\Component\Model;

use AppBundle\Entity\Project;


/**
 * Class ApiHitsStatisticModel
 *
 * @package PM\PlentyMarketsBundle\Component\Model
 */
class ApiHitsStatisticModel
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var int
     */
    private $count;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return ApiHitsStatisticModel
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     *
     * @return ApiHitsStatisticModel
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param int $count
     *
     * @return ApiHitsStatisticModel
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

}