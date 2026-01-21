<?php
use App\router\Route;
use App\Controllers\TestController;

Route::get('/testRoute', TestController::class, 'testRoute');

Route::get('/login', TestController::class, 'login');

Route::get('/register', TestController::class, 'register');

Route::get('/', TestController::class, 'login');


