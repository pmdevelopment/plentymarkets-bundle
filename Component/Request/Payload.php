<?php


namespace PM\PlentyMarketsBundle\Component\Request;

/**
 * Class Payload
 *
 * @package PM\PlentyMarketsBundle\Component\Request
 */
class Payload
{

    /**
     * @var string
     */
    private $resource;

    /**
     * @var string
     */
    private $method;

    /**
     * @var array
     */
    private $body = [];

    public function getResource(): string
    {
        return $this->resource;
    }

    /**
     * @return Payload
     */
    public function setResource(string $resource): Payload
    {
        if (!str_starts_with($resource, 'rest/')) {
            $resource = sprintf('rest/%s', $resource);
        }

        $this->resource = $resource;

        return $this;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return Payload
     */
    public function setMethod(string $method): Payload
    {
        $this->method = $method;

        return $this;
    }

    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @return Payload
     */
    public function setBody(array $body): Payload
    {
        $this->body = $body;

        return $this;
    }

}