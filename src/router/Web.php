<?php
use App\router\Route;
use App\Controllers\TestController;

Route::get('/home', TestController::class, 'home');

Route::get('/login', TestController::class, 'login');

Route::get('/register', TestController::class, 'register');

Route::get('/', TestController::class, 'home');

Route::get('/dashboard', TestController::class, 'dashboard');

Route::get('/offres', TestController::class, 'offres');

Route::get('/tags', TestController::class, 'tags');

Route::get('/categories', TestController::class, 'categories');

Route::get('/dashboardCandidate', TestController::class, 'dashboardCandidate');

Route::get('/JobsRecommandés', TestController::class, 'JobsRecommandés');

Route::get('/dashboardRecruteur', TestController::class, 'dashboardRecruteur');

Route::get('/candidatures', TestController::class, 'candidatures');




