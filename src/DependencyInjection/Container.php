<?php

declare(strict_types=1);

namespace App\DependencyInjection;

use App\DependencyInjection\Exception\ServiceNotFoundException;
use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    /** @var array */
    private $services;

    public function get($key)
    {
        if (!isset($this->services[$key])){
            throw new ServiceNotFoundException("No selected key {$key} in registered services.");
        }

        return $this->services[$key];
    }

    public function set(string $key, $value)
    {
        $this->services[$key] = $value;
    }

    public function has($key): bool
    {
        return isset($this->services[$key]);
    }
}