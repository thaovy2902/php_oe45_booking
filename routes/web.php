<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ListTourController;
use Illuminate\Support\Facades\Route;

Route::get('language/{language}', [LanguageController::class, 'index'])->name('language');
Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('users', UserController::class)->only([
    'show', 'store', 'edit',
]);

Route::resource('tours', TourController::class)->only([
    'index', 'show',
]);
Route::resource('reviews', ReviewController::class)->only([
    'index', 'show',
]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::resource('admin/tours', ListTourController::class);

Route::get('search/', [TourController::class, 'search'])->name('search');
