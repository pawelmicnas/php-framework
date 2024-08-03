<?php

declare(strict_types=1);

namespace App\Controller;

use App\DependencyInjection\Container;

abstract class AbstractController
{
    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    protected function render(string $template, array $variables = [])
    {
        extract($variables, EXTR_OVERWRITE);

        return require(__DIR__ . '/../../views/' . $template);
    }
}
