<?php
class Router
{
    private $routes = [];

    public function addRoute($route, $callback)
    {
        $this->routes[$route] = $callback;
    }

    public function dispatch($requestedRoute)
    {
        if (array_key_exists($requestedRoute, $this->routes)) {
            call_user_func($this->routes[$requestedRoute]);
        } else {
            //$this->routes['404']();
        }
    }
}
