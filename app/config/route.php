<?php

namespace App\Config;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Config\View;

class Route
{
    protected $routes = [];

    public function get($path, $handler)
    {
        $this->routes['GET'][$path] = $handler;
    }

    public function dispatch()
    {
        $request = Request::createFromGlobals();
        $path = $request->getPathInfo();
        $method = $request->getMethod();

        if (isset($this->routes[$method][$path])) {
            list($controller, $action) = explode('@', $this->routes[$method][$path]);
            $controller = "App\\Controllers\\" . $controller;
            $controllerInstance = new $controller();
            $controllerInstance->$action($request);
        } else {
            $content = View::render('error/notfound');
            $response = new Response($content, Response::HTTP_NOT_FOUND);
            $response->send();
        }
    }
}
