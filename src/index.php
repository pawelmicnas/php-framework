<?php

ini_set( 'display_errors', 'On' );
error_reporting( E_ALL );

require 'vendor/autoload.php';

use App\DependencyInjection\Factory\ContainerFactory;
use App\Http\Request;
use App\Http\Router;

$router = new Router(require 'config/routes.php', new ContainerFactory());
$request = new Request();

$router->direct($request->getUri(), $request->getMethod());
