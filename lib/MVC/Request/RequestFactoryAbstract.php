<?php

declare(strict_types = 1);

namespace MVC\Request;

abstract class RequestFactoryAbstract
{
    public static function create(): RequestInterface
    {
        $request = new Request();
        return $request;
    }
}