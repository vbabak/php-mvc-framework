<?php

declare(strict_types = 1);

namespace MVC\Router;

use MVC\Request\RequestAwareTrait;

class Router implements RouterInterface
{
    use RequestAwareTrait;

    public function routeMatch(): bool
    {
        $uri = $this->getRequest()->getRequestUri();

        $parts = explode('/', $uri);

        $controller = !empty($parts[1]) ? ucfirst($parts[1]) : 'Index';
        $action = !empty($parts[2]) ? $parts[2] . 'Action' : 'indexAction';

        $file = $this->getControllerFile($controller);

        if (!file_exists($file)) {
            $controller = 'NotFound';
            // $file = $this->getControllerFile($controller);
        }

        // require_once $file;

        $class = $this->getControllerClass($controller);

        $class = '\App\Controller\\' . $class;
        $obj = new $class;

        if (!method_exists($obj, $action)) {
            $controller = 'NotFound';
            $action = 'indexAction';
            $class = '\App\Controller\\' . $this->getControllerClass($controller);
            // throw new \Exception('Method "' . $action . '" does not exists: ' . $class);
        }

        $this->getRequest()->setController($class);
        $this->getRequest()->setAction($action);

        return true;
    }

    protected function not_found()
    {

    }

    protected function getControllerFile($controller)
    {
        $file = APPLICATION_PATH . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . $this->getControllerClass($controller) . '.php';

        return $file;
    }

    protected function getControllerClass($controller)
    {
        $class = $controller . 'Controller';

        return $class;
    }
}