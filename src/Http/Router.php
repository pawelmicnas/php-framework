<?php

declare(strict_types=1);

namespace App\Http;

use App\DependencyInjection\Container;
use App\DependencyInjection\Factory\ContainerFactory;
use Exception;

class Router
{
    /** @var array $routes */
    private $routes = [
        'GET' => [],
        'POST' => [],
    ];

    /** @var ContainerFactory */
    private $containerFactory;

    public function __construct(array $routes, ContainerFactory $containerFactory)
    {
        $this->routes = $routes;
        $this->containerFactory = $containerFactory;
    }

    public function direct(string $uri, string $method)
    {
        if (isset($this->routes[$method][$uri])) {
            $app = $this->containerFactory->createContainer($this->routes[$method][$uri]['services']);
            return $this->callMethodOfController($app, ...explode('@', $this->routes[$method][$uri]['controller']));
        }

        throw new Exception('No route found');
    }

    private function callMethodOfController(Container $app, $controller, $method)
    {
        $controller = 'App\\Controller\\' . $controller;

        return (new $controller($app))->$method();
    }
}