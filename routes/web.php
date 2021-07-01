<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserController;

Route::get('language/{language}', [LanguageController::class, 'index'])->name('language');
Route::get('search/', [TourController::class, 'search'])->name('search');
Route::get('/', function () {
    return view('home');
})->name('home');
Route::resource('users', UserController::class)->only([
    'show', 'store', 'edit',
]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::resource('tours', TourController::class)->only([
    'index', 'show',
]);
Route::resource('reviews', ReviewController::class)->only([
    'index', 'show',
]);
require __DIR__ . '/auth.php';
