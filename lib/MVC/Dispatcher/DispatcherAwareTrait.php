<?php

declare(strict_types = 1);

namespace MVC\Dispatcher;

use MVC\Dispatcher\DispatcherInterface;

trait DispatcherAwareTrait
{
    /** @var DispatcherInterface  */
    protected $dispatcher;

    public function setDispatcher(DispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
        return $this;
    }

    public function getDispatcher()
    {
        return $this->dispatcher;
    }
}