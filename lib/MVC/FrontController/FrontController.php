<?php

declare(strict_types = 1);

namespace MVC\FrontController;

use MVC\Dispatcher\DispatcherAwareTrait;
use MVC\Dispatcher\DispatcherFactoryAbstract;
use MVC\Request\RequestAwareTrait;
use MVC\Request\RequestFactoryAbstract;
use MVC\Response\ResponseAwareTrait;
use MVC\Response\ResponseFactoryAbstract;
use MVC\Router\RouterAwareTrait;
use MVC\Router\RouterFactoryAbstract;

class FrontController implements FrontControllerInterface
{
    use DispatcherAwareTrait;
    use RequestAwareTrait;
    use ResponseAwareTrait;
    use RouterAwareTrait;

    public function run()
    {
        if (!$this->getDispatcher()) {
            $dispatcher = DispatcherFactoryAbstract::create();
            $this->setDispatcher($dispatcher);
        }

        if (!$this->getRequest()) {
            $request = RequestFactoryAbstract::create();
            $this->setRequest($request);
        }

        if (!$this->getResponse()) {
            $response = ResponseFactoryAbstract::create();
            $this->setResponse($response);
        }

        if (!$this->getRouter()) {
            $router = RouterFactoryAbstract::create();
            $this->setRouter($router);
        }

        $this->getDispatcher()->setRequest($this->getRequest());
        $this->getDispatcher()->setResponse($this->getResponse());
        $this->getDispatcher()->setRouter($this->getRouter());

        $this->getRouter()->setRequest($this->getRequest());


        $this->getDispatcher()->dispatch();
    }
}