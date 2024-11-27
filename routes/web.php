<?php


use App\Http\Controllers\MovieController;
use App\Http\Controllers\CreateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index'])->name('home');

Route::get('/create', [CreateController::class, 'index'])->name('create');

Route::post('/createmovie', [CreateController::class, 'store'])->name('store');

Route::post('/deletemovie/{id}', [MovieController::class, 'delete'])->name('delete');