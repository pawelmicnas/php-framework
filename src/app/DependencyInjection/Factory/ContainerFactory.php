<?php

declare(strict_types=1);

namespace App\DependencyInjection\Factory;

use App\DependencyInjection\Container;

class ContainerFactory
{
    public function createContainer(array $services = []): Container
    {
        $container = new Container();
        foreach ($services as $alias => $service) {
            if (isset($service['parameters'])) {
                $container->set($alias, new $service['class'](...$service['parameters']));
                continue;
            }

            $container->set($alias, new $service['class']);
        }

        return $container;
    }
}
