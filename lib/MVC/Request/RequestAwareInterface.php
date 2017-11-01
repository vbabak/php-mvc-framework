<?php

declare(strict_types = 1);

namespace MVC\Request;

interface RequestAwareInterface
{
    public function setRequest(RequestInterface $request);
}
