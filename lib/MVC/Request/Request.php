<?php

declare(strict_types = 1);

namespace MVC\Request;

class Request implements RequestInterface
{
    protected $controller;
    protected $action;
    protected $module;
    protected $request_uri;

    public function __construct()
    {
        $this->request_uri = strtolower($_SERVER['REQUEST_URI']);
    }

    public function setController(string $controller)
    {
        $this->controller = $controller;
        return $this;
    }

    public function getController(): string
    {
        return $this->controller;
    }

    public function setAction(string $action)
    {
        $this->action = $action;
        return $this;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function setModule(string $module)
    {
        $this->module = $module;
        return $this;
    }

    public function getModule(): string
    {
        return $this->module;
    }

    public function get(string $param, $default = null)
    {
        return $_REQUEST[$param] ?? $default;
    }

    public function getRequestUri(): string
    {
        return $this->request_uri;
    }
}