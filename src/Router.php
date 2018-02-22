<?php

namespace Fluffy\Routing;

use Fluffy\Routing\Contracts\RouteContract;
use Fluffy\Routing\Contracts\RouterContract;
use Psr\Http\Message\RequestInterface;

class Router implements RouterContract
{
    /**
     * @var $collection \Fluffy\Routing\RouteCollection
     */
    protected $collection;

    public function add(RouteContract $route)
    {
    }

    public function match(RequestInterface $request): RouteContract
    {

    }
}
