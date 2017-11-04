<?php

declare(strict_types = 1);

namespace MVC\Request;

trait RequestAwareTrait
{
    /** @var RequestInterface */
    protected $request;

    public function setRequest(RequestInterface $request)
    {
        $this->request = $request;

        return $this;
    }

    public function getRequest()
    {
        return $this->request;
    }
}