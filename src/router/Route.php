<?php
namespace App\router;

class Route {
    private static array $routes = [];

    private static function addRoute(string $method, string $path, string $class, string $action) {
        self::$routes[$method][] = ['path' => $path, 'class' => $class, 'action' => $action];
    }

    public static function get(string $path, string $class, string $action) {
        self::addRoute('GET', $path, $class, $action);
    }

    public static function post(string $path, string $class, string $action) {
        self::addRoute('POST', $path, $class, $action);
    }

    public static function getRoutes() {
        return self::$routes;
    }
}
