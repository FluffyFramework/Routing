<?php

namespace Fluffy\Routing\Contracts;

use Psr\Http\Message\RequestInterface;

interface RouterContract
{
    /**
     * Matching given Request to Route.
     *
     * @param RequestInterface $request
     *
     * @return RouteContract
     */
    public function match(RequestInterface $request): RouteContract;

    /**
     * Add new route to array
     *
     * @param RouteContract $route
     * @return void
     */
    public function add(RouteContract $route);
}
