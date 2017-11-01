<?php

declare(strict_types = 1);

namespace MVC\Request;

interface RequestInterface
{
    public function setController(string $controller);

    public function getController(): string;

    public function setAction(string $action);

    public function getAction(): string;

    public function setModule(string $module);

    public function getModule(): string;

    public function get(string $param, $default = null);
}