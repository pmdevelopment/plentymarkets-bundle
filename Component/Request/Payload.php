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

    /**
     * @return string
     */
    public function getResource(): string
    {
        return $this->resource;
    }

    /**
     * @param string $resource
     *
     * @return Payload
     */
    public function setResource(string $resource): Payload
    {
        if ('rest/' !== substr($resource, 0, 5)) {
            $resource = sprintf('rest/%s', $resource);
        }

        $this->resource = $resource;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     *
     * @return Payload
     */
    public function setMethod(string $method): Payload
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @param array $body
     *
     * @return Payload
     */
    public function setBody(array $body): Payload
    {
        $this->body = $body;

        return $this;
    }

}