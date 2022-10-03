<?php


namespace PM\PlentyMarketsBundle\Component\Request;

class Batch
{
    private int $limitPerPage = 50;

    private array $payloads = [];

    public function __construct(?int $limitPerPage = null)
    {
        if (null !== $limitPerPage) {
            $this->limitPerPage = $limitPerPage;
        }
    }

    public function getPayloads(): array
    {
        return $this->payloads;
    }

    public function setPayloads(array $payloads): self
    {
        $this->payloads = $payloads;

        return $this;
    }

    public function addPayload(Payload $payload): self
    {
        $this->payloads[] = $payload;

        return $this;
    }

    public function getPageCount(): int
    {
        return ceil(count($this->payloads) / $this->limitPerPage);
    }

    public function getPage(int $page = 1): Batch
    {
        if ($this->limitPerPage >= count($this->payloads)) {
            return $this;
        }

        $batch = new Batch();
        $batch->setPayloads(array_slice($this->payloads, ($this->limitPerPage * ($page - 1)), $this->limitPerPage));

        return $batch;
    }
}