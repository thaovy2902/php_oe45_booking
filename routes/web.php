<?php
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

Route::get('language/{language}', [LanguageController::class, 'index'])->name('language');
Route::get('/', function () {
    return view('home');
})->name('home');
Route::resource('/tour', TourController::class)->only([
    'index', 'show',

]);