<?php

declare(strict_types = 1);

namespace MVC\Response;

trait ResponseAwareTrait
{
    /** @var ResponseInterface */
    protected $response;

    public function setResponse(ResponseInterface $response)
    {
        $this->response = $response;
        return $this;
    }

    public function getResponse()
    {
        return $this->response;
    }
}