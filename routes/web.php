<?php

use Illuminate\Support\Facades\Route;

Route::get('/cars/all', '\App\Http\Controllers\CarController@getAllCars')->name('cars.all');
Route::post('/cars/save', '\App\Http\Controllers\CarController@saveCar')->name('cars.save');
Route::get('/cars/{id}/edit', '\App\Http\Controllers\CarController@editCar')->name('cars.edit');
Route::post('/cars/{id}/update', '\App\Http\Controllers\CarController@updateCar')->name('cars.update');
Route::post('/cars/delete', '\App\Http\Controllers\CarController@deleteCar')->name('cars.delete');
