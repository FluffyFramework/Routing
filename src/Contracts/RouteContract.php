<?php

namespace Fluffy\Routing\Contracts;

interface RouteContract
{
    /**
     * Return Route URI
     *
     * @return string
     */
    public function uri(): string;

    /**
     * Returns Route Method type.
     *
     * @return string
     */
    public function method(): string;

    /**
     * Returns Route Controller name
     *
     * @return \Closure|string
     */
    public function controller();

    /**
     * @param string $name
     * @return mixed
     */
    public function __get(string $name);
}