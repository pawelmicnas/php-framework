<?php

declare(strict_types=1);

namespace App\Http;

use App\DependencyInjection\Container;
use App\DependencyInjection\Factory\ContainerFactory;
use Exception;

class Router
{
    const string CONTROLLER_NAMESPACE = 'App\\Controller\\';

    public function __construct(private readonly array $routes, private readonly ContainerFactory $containerFactory)
    {}

    /**
     * @throws Exception
     */
    public function direct(string $uri, string $method)
    {
        if (isset($this->routes[$method][$uri])) {
            $app = $this->containerFactory->createContainer($this->routes[$method][$uri]['services'] ?? []);

            return $this->callMethodOfController($app, ...explode('@', $this->routes[$method][$uri]['controller']));
        }

        throw new Exception('No route found');
    }

    private function callMethodOfController(Container $app, $controller, $method)
    {
        $controller = self::CONTROLLER_NAMESPACE . $controller;

        return (new $controller($app))->$method();
    }
}