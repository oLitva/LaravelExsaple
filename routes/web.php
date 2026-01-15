<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/first-page', [TestController::class, 'first']);

Route::get('/second-page',[TestController::class, 'second']);


Route::get('/', [MainController::class, 'home'])-> name('home');

Route::get('/array-page', [MainController::class, 'showArray'])-> name('Array');



