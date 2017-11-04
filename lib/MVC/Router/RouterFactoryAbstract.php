<?php

declare(strict_types = 1);

namespace MVC\Router;

abstract class RouterFactoryAbstract
{
    public static function create(): RouterInterface
    {
        $router = new Router();
        return $router;
    }
}