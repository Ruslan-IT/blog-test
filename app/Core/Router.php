<?php

namespace App\Core;

class Router
{
    private array $routes = [];

    public function get(string $path, string $action): void
    {
        $this->routes['GET'][] = [
            'path' => $path,
            'action' => $action
        ];
    }

    public function post(string $path, string $action): void
    {
        $this->routes['POST'][] = [
            'path' => $path,
            'action' => $action
        ];
    }

    public function dispatch(string $uri): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($uri, PHP_URL_PATH);

        if (!isset($this->routes[$method])) {
            $this->notFound();
            return;
        }

        foreach ($this->routes[$method] as $route) {

            $routePath = $route['path'];

            // превращаем /category/{slug} → regex
            $pattern = preg_replace('#\{[^}]+\}#', '([^/]+)', $routePath);
            $pattern = "#^" . $pattern . "$#";

            if (preg_match($pattern, $path, $matches)) {

                array_shift($matches);

                 $this->callAction($route['action'], $matches);

                 return;
            }
        }

        $this->notFound();
    }

    private function callAction(string $action, array $params = [])
    {
        list($controller, $method) = explode('@', $action);

        $controllerClass = "App\\Controllers\\$controller";

        if (!class_exists($controllerClass)) {
            die("Controller $controllerClass not found");
        }

        $controllerObject = new $controllerClass();

        if (!method_exists($controllerObject, $method)) {
            die("Method $method not found in $controllerClass");
        }

        // передаём параметры (slug и т.д.)
        call_user_func_array([$controllerObject, $method], $params);
    }

    private function notFound(): void
    {
        http_response_code(404);
        echo "404 | Page not found";
    }
}