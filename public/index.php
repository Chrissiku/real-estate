<?php

use App\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';


$router = new Router(dirname(__DIR__) . '/views');

$router->get('/properties', 'properties', 'home')
       ->run();
