<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\SeriesController;

Route::get('/series', [SeriesController::class, 'index']);

