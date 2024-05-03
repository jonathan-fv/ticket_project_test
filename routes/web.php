<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ShowTypeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('/login', function () {});

Route::get('/users/{user}', [UserController::class, 'show'])->name('user.show');
Route::delete('/users/{user}/delete', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/cities', function () {});
Route::get('/cities/{city}', [CityController::class, 'show'])->name('city.show');
Route::delete('/cities/{city}/delete', [CityController::class, 'destroy'])->name('city.destroy');

Route::get('/evenements', function () {});
Route::get('/evenements/{evenement}', [EvenementController::class, 'show'])->name('evenement.show');
Route::delete('/evenements/{evenement}/delete', [CityController::class, 'destroy'])->name('evenement.destroy');

Route::get('/locations', function () {});
Route::get('/locations/{location}', [LocationController::class, 'show'])->name('location.show');
Route::delete('/locations/{location}/delete', [CityController::class, 'destroy'])->name('location.destroy');

Route::get('/showtypes', function () {});
Route::get('/showtypes/{showtype}', [ShowTypeController::class, 'show'])->name('showtype.show');

