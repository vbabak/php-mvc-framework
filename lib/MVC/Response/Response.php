<?php

declare(strict_types = 1);

namespace MVC\Response;

class Response implements ResponseInterface
{
    protected $headers = [];

    protected $body = '';

    public function sendResponse(): void
    {
        echo $this->body;
    }

    public function setBody($body): void
    {
        $this->body = $body;
    }

    public function addHeader(string $name, string $value): void
    {
        $name = strtolower($name);
        $this->headers[$name] = $value;
    }
}