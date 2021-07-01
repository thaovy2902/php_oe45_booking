<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserController;

Route::get('language/{language}', [LanguageController::class, 'index'])->name('language');
Route::get('search/', [TourController::class, 'search'])->name('search');
Route::get('/', function () {
    return view('booking');
})->name('home');
Route::get('users/profile/{id}', [UserController::class, 'show_edit'])->name('edit_profile');
Route::resource('users', UserController::class)->only([
    'show', 'store', 'update',
]);
Route::resource('orders', UserController::class)->only([
    'show',
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
