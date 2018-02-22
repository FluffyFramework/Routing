<?php

namespace Fluffy\Routing;

use Fluffy\Routing\Contracts\RouteContract;

class Route implements RouteContract
{
    /**
     * Route URI
     *
     * @var string
     */
    protected $uri;

    /**
     * Controller name or closure
     *
     * @var \Closure|string
     */
    protected $controller;

    /**
     * @var string
     */
    private $method;

    /**
     * Route constructor.
     *
     * @param string $method
     * @param string $uri
     * @param \Closure|string $controller
     */
    public function __construct(string $method, string $uri, $controller)
    {
        $this->uri = $uri;
        $this->controller = $controller;
        $this->method = $method;
    }

    /**
     * Return Route URI
     *
     * @return string
     */
    public function uri(): string
    {
        // TODO: Implement uri() method.
    }

    /**
     * Returns Route Method type.
     *
     * @return string
     */
    public function method(): string
    {
        // TODO: Implement method() method.
    }

    /**
     * Returns Route Controller name
     *
     * @return \Closure|string
     */
    public function controller()
    {
        // TODO: Implement controller() method.
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function __get(string $name)
    {
        return $this->$name;
    }
}