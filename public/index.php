<?php

use App\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';

/**
 * This checks there is a page param which as the value of 1 and redirect to a modified URL
 * without this param. ex: blog?page=1 ==>> blog and blog?page=1&author=jodrack ==> blog?author=jodrack
 */
if(isset($_GET['page']) && $_GET['page'] === '1') {
       $uri = explode('?', $_SERVER['REQUEST_URI'])[0];
       $get = $_GET;
       unset($get['page']);
       $query = http_build_query($get);

       if(!empty($query)) {
         // add the following parameters if any.
          $uri .= '?' . $query;
       }
       // redirect to the current URL with a 301 status code
       header('Location:'. $uri);
       http_response_code(301);
       exit();
}

$router = new Router(dirname(__DIR__) . DIRECTORY_SEPARATOR. 'views');

$router->get('/', 'components/index', '_home')
       ->get('/home', 'components/index', '__home')
       ->get('/about', 'components/about', 'about')
       ->get('/property/[i:id]', 'components/single_property', 'single_property')
       ->get('/property_list', 'components/property_list', 'property_list')
       ->get('/testimonial', 'components/testimonial', 'testimonial')
       ->get('/contact-us', 'components/contact', 'contact')
       ->run();
