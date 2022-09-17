<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


Route::get('/cliente', [ClientController::class, 'index']);
Route::get('/cliente/create', [ClientController::class, 'create']);
Route::post('/cliente/create', [CLientController::class, 'store']);
Route::get('/cliente/{cliente}', [ClientController::class, 'show']);
Route::get('/cliente/{cliente}/edit', [ClientController::class, 'edit']);

