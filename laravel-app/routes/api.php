<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/status', [ApiController::class, 'status']);
Route::post('/store', [ApiController::class, 'store']);

