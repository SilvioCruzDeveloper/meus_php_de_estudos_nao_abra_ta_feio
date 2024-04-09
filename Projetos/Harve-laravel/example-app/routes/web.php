<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckAgeMiddlewrae;

Route::get('/bolinho', [HomeController::class, 'teste']);
