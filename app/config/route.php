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

    public function post($path, $handler)
    {
        $this->routes['POST'][$path] = $handler;
    }

    public function dispatch()
    {
        $request = Request::createFromGlobals();
        $path = $request->getPathInfo();
        $method = $request->getMethod();

        if (!isset($this->routes[$method][$path])) {
            return $this->renderNotFound();
        }

        list($controller, $action) = explode('@', $this->routes[$method][$path]);
        $controllerClass = "App\\Controllers\\" . $controller;

        if (!class_exists($controllerClass)) {
            return $this->renderNotFound();
        }

        $controllerInstance = new $controllerClass();
        if (!method_exists($controllerInstance, $action)) {
            return $this->renderNotFound();
        }

        return $controllerInstance->$action($request);
    }

    protected function renderNotFound()
    {
        $content = View::render('error/notfound');
        $response = new Response($content, Response::HTTP_NOT_FOUND);
        $response->send();
        exit;
    }
}
