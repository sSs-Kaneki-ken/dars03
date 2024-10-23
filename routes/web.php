<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Dashboard
Route::get('/', [AdminController::class, 'adminDashboard1']);
Route::get('/dashboard2', [AdminController::class, 'adminDashboard2']);
Route::get('/dashboard3', [AdminController::class, 'adminDashboard3']);
Route::get('/iframe', [AdminController::class, 'iframePage']);

// Pages папка
Route::get('/widgets', [AdminController::class, 'WidgetsPage']);
Route::get('/kanban', [AdminController::class, 'KanbanPage']);
Route::get('/gallery', [AdminController::class, 'GelleryPage']);
Route::get('/calendar', [AdminController::class, 'CalendarPage']);

//Панель пользователя
Route::get('/user-panel', [UserController::class, 'index']);
Route::get('/servis-details', [UserController::class, 'servisDetails']);
Route::get('/blog', [UserController::class, 'blog']);
Route::get('/blog-details', [UserController::class, 'blogDetails']);
Route::get('/portfolio-details', [UserController::class, 'portfolioDetails']);
// laravel
Route::get('/laravel', [AdminController::class, 'laravel']);

