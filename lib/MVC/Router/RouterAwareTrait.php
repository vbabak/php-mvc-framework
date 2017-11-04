<?php

declare(strict_types = 1);

namespace MVC\Router;

trait RouterAwareTrait
{
    /** @var RouterInterface */
    protected $router;

    public function setRouter(RouterInterface $router)
    {
        $this->router = $router;
        return $this;
    }

    public function getRouter()
    {
        return $this->router;
    }
}