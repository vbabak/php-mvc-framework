<?php

declare(strict_types = 1);

namespace MVC\Dispatcher;

use MVC\Request\RequestAwareInterface;
use MVC\Response\ResponseAwareInterface;
use MVC\Router\RouterAwareInterface;

interface DispatcherInterface extends RequestAwareInterface,
    ResponseAwareInterface,
    RouterAwareInterface
{
    public function dispatch();
}