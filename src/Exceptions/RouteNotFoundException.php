<?php

namespace Fluffy\Routing\Exceptions;

use Exception;

class RouteNotFoundException extends Exception
{
    public function __construct(string $method = "", string $uri)
    {
        parent::__construct("Route ".strtoupper($method)." $uri not found.");
    }
}