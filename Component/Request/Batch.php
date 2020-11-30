<?php


namespace PM\PlentyMarketsBundle\Component\Request;

/**
 * Class Batch
 *
 * @package PM\PlentyMarketsBundle\Component\Request
 */
class Batch
{
    /**
     * @var array|Payload[]
     */
    private $payloads;

    /**
     * @return array|Payload[]
     */
    public function getPayloads()
    {
        return $this->payloads;
    }

    /**
     * @param array|Payload[] $payloads
     *
     * @return Batch
     */
    public function setPayloads($payloads)
    {
        $this->payloads = $payloads;

        return $this;
    }

    /**
     * @param Payload $payload
     *
     * @return $this
     */
    public function addPayload(Payload $payload)
    {
        $this->payloads[] = $payload;

        return $this;
    }


    /**
     * Get Page count
     *
     * @return int
     */
    public function getPageCount(): int
    {
        return ceil(count($this->payloads) / 50);
    }

    /**
     * Get Page
     *
     * @param int $page
     *
     * @return $this|Batch
     */
    public function getPage(int $page = 1): Batch
    {
        if (51 > count($this->payloads)) {
            return $this;
        }

        $batch = new Batch();
        $batch->setPayloads(array_slice($this->payloads, (50 * ($page - 1)), 50));

        return $batch;
    }
}