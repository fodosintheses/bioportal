<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\StoreController;



Route::get('/', [PageController::class, 'index']);

Route::resource('location', LocationController::class);
Route::resource('store', StoreController::class);
Route::resource('industry', IndustryController::class);

Route::get('/delete_location/{id}', [LocationController::class, 'delete_location']);
Route::get('delete_industry/{id}', [IndustryController::class, 'delete_industry']);
