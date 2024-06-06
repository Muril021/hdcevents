<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/dashboard', [EventController::class, 'dashboard'])
->middleware('auth');
Route::get('/events/create', [EventController::class, 'create'])
->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/events/edit/{id}', [EventController::class, 'edit'])
->middleware('auth');
Route::post('/events', [EventController::class, 'store'])
->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])
->middleware('auth');
Route::delete('/events/{id}', [EventController::class, 'destroy'])
->middleware('auth');
