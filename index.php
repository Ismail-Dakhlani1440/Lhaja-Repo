<?php
session_start();
use App\Modals\DB\Database;
use App\router\Route;
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/router/Web.php';
use App\Controller\AuthController;

$path = $_SERVER['PATH_INFO'] ?? '/';
$method = strtoupper($_SERVER['REQUEST_METHOD']);
// dd(Route::getRoutes()[$method]);

$isFound = false;
foreach(Route::getRoutes()[$method] as $route) {
    if ($path === $route['path']) {
        $isFound = true;
        $controllerName = $route['class'];
        $actionName = $route['action'];
        $controllerObject = new $controllerName(Database::getInstance());
        $controllerObject->$actionName();
    }
}
if(!$isFound) {
    echo 'Not found 404';
}