<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ListTourController;
use Illuminate\Support\Facades\Route;

Route::get('language/{language}', [LanguageController::class, 'index'])->name('language');
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/destinations', function () {
    return view('destinations');
})->name('destinations');

Route::get('/tour', function () {
    return view('welcome');
})->name('tour');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::resource('admin/tours', ListTourController::class);
