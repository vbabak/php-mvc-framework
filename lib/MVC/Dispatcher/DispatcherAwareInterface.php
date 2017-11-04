<?php

declare(strict_types = 1);

namespace MVC\Dispatcher;

interface DispatcherAwareInterface
{
    public function setDispatcher(DispatcherInterface $request);

    public function getDispatcher();
}
