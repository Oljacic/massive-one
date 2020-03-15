<?php

namespace Helper\Route;

class Route {
    /**
     * @var string
     */
    private $pattern = '';

    /**
     * @var string
     */
    private $controller = '';

    /**
     * @var string
     */
    private $method = '';

    /**
     * Route Constructor
     * 
     * @param string $pattern
     * @param string $controller
     * @param string $method
     */
    public function __construct(string $pattern, string $controller, string $method) {
        $this->pattern = $pattern;
        $this->controller = $controller;
        $this->method = $method;
    }
}