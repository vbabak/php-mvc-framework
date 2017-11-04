<?php

declare(strict_types = 1);

namespace MVC\Dispatcher;

abstract class DispatcherFactoryAbstract
{
    public static function create(): DispatcherInterface
    {
        $dispatcher = new Dispatcher();
        return $dispatcher;
    }
}