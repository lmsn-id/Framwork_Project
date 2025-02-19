<?php

use App\Config\Route;

$router = new Route();

$router->get('/', 'HomeController@index');

return $router;
