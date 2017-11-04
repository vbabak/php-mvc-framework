<?php

declare(strict_types = 1);

namespace MVC\Response;

interface ResponseInterface
{
    public function setBody($body): void;

    public function sendResponse(): void;

    public function addHeader(string $name, string $value): void;
}