<?php

use App\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';


$router = new Router(dirname(__DIR__) . DIRECTORY_SEPARATOR. 'views');

$router->get('/', 'components/index', '_home')
       ->get('/home', 'components/index', '__home')
       ->get('/about', 'components/about', 'about')
       ->get('/property_list', 'components/property_list', 'property_list')
       ->get('/testimonial', 'components/testimonial', 'testimonial')
       ->get('/contact', 'components/contact', 'contact')
       ->run();
