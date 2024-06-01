<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/test500', [ExampleController::class, 'test500']);
