<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create']);

Route::post('/listings', [ListingController::class, 'store']);

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

Route::put('/listings/{listing}', [ListingController::class, 'update']);

Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route::get('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout']);

Route::get('/register', [UserController::class, 'create']);

Route::post('/users', [UserController::class, 'store']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);
