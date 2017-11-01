<?php

declare(strict_types = 1);

namespace MVC\Router;

use MVC\Request\RequestAwareInterface;

interface RouterInterface extends RequestAwareInterface
{
    public function routeMatch(): bool;
}