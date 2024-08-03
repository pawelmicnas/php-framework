<?php

declare(strict_types=1);

namespace App\Http;

class Request
{
    /** @var string $uri */
    private $uri;

    /** @var string $method */
    private $method;

    public function __construct()
    {
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return $this->method;
    }
}