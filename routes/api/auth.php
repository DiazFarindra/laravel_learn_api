<?php

use App\Http\Controllers\Api\Auth\AuthenticatedTokenController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthenticatedTokenController::class, 'store']);

Route::post('/logout', [AuthenticatedTokenController::class, 'destroy'])
    ->middleware('auth:sanctum');
