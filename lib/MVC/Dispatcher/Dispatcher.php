<?php

declare(strict_types = 1);

namespace MVC\Dispatcher;

use MVC\Request\RequestAwareTrait;
use MVC\Response\ResponseAwareTrait;
use MVC\Router\RouterAwareTrait;

class Dispatcher implements DispatcherInterface
{
    use ResponseAwareTrait;
    use RouterAwareTrait;
    use RequestAwareTrait;

    public function dispatch()
    {
        $this->getRouter()->routeMatch();

        $controller = $this->getRequest()->getController();
        $action = $this->getRequest()->getAction();

        $instance = new $controller;
        $response = call_user_func(array($instance, $action));





    }
}