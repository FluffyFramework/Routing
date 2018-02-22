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
     * Add new route to collection
     *
     * @param RouteContract $route
     * @return \Fluffy\Routing\Contracts\RouteContract
     */
    public function addRoute(RouteContract $route): RouteContract;

    /**
     * @param string $uri
     * @param \Closure|string $controller
     * @return \Fluffy\Routing\Contracts\RouteContract
     */
    public function get(string $uri, $controller): RouteContract;

    /**
     * @param string $uri
     * @param \Closure|string $controller
     * @return \Fluffy\Routing\Contracts\RouteContract
     */
    public function patch(string $uri, $controller): RouteContract;

    /**
     * @param string $uri
     * @param \Closure|string $controller
     * @return \Fluffy\Routing\Contracts\RouteContract
     */
    public function post(string $uri, $controller): RouteContract;

    /**
     * @param string $uri
     * @param \Closure|string $controller
     * @return \Fluffy\Routing\Contracts\RouteContract
     */
    public function delete(string $uri, $controller): RouteContract;
}
