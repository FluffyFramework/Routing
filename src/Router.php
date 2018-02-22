<?php

namespace Fluffy\Routing;

use Fluffy\Routing\Contracts\RouteContract;
use Fluffy\Routing\Contracts\RouterContract;
use Fluffy\Routing\Exceptions\RouteNotFoundException;
use Psr\Http\Message\RequestInterface;

class Router implements RouterContract
{
    /**
     * @var $collection \Fluffy\Routing\RouteCollection
     */
    protected $collection;

    /**
     * @param \Psr\Http\Message\RequestInterface $request
     * @return \Fluffy\Routing\Contracts\RouteContract
     *
     * @throws \Fluffy\Routing\Exceptions\RouteNotFoundException
     */
    public function match(RequestInterface $request): RouteContract
    {
        foreach ($this->collection as $route) {
            if ($route->uri === $request->getUri() && $route->method === $request->getMethod()) {
                return $route;
            }
        }
        throw new RouteNotFoundException($request->getUri(), $request->getMethod());
    }

    /**
     * @param string $uri
     * @param \Closure|string $controller
     * @return \Fluffy\Routing\Contracts\RouteContract
     */
    public function get(string $uri, $controller): RouteContract
    {
        return $this->addRoute(new Route('GET', $uri, $controller));
    }

    /**
     * Adding Route to Collection
     *
     * @param \Fluffy\Routing\Contracts\RouteContract $route
     * @return \Fluffy\Routing\Contracts\RouteContract
     */
    public function addRoute(RouteContract $route): RouteContract
    {
        $this->collection->add($route);

        return $route;
    }

    /**
     * @param string $uri
     * @param \Closure|string $controller
     * @return \Fluffy\Routing\Contracts\RouteContract
     */
    public function patch(string $uri, $controller): RouteContract
    {
        return $this->addRoute(new Route('PATCH', $uri, $controller));
    }

    /**
     * @param string $uri
     * @param \Closure|string $controller
     * @return \Fluffy\Routing\Contracts\RouteContract
     */
    public function post(string $uri, $controller): RouteContract
    {
        return $this->addRoute(new Route('POST', $uri, $controller));
    }

    /**
     * @param string $uri
     * @param \Closure|string $controller
     * @return \Fluffy\Routing\Contracts\RouteContract
     */
    public function delete(string $uri, $controller): RouteContract
    {
        return $this->addRoute(new Route('DELETE', $uri, $controller));
    }
}
