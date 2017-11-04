<?php

declare(strict_types = 1);

namespace MVC\Response;

abstract class ResponseFactoryAbstract
{
    public static function create(): ResponseInterface
    {
        $response = new Response();
        return $response;
    }
}