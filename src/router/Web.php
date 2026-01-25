<?php

use App\Controllers\RecruteurController;
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

Route::get('/candidatures', TestController::class, 'candidatures');

// rexcruteur routes
Route::get('/dashboardRecruteur', RecruteurController::class, 'dashboardRecruteur');

Route::post('/recruteur/add_post', RecruteurController::class, 'addPost');
Route::post('/recruteur/update_post', RecruteurController::class, 'updatePost');
Route::post('/recruteur/delete_post', RecruteurController::class, 'deletePost');




