<?php

use App\Http\Controllers\profileController;
use App\Http\Controllers\TendikController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[profileController::class,'home']);
Route::get('/profile',[profileController::class,'profile']);
Route::get('/contact',[profileController::class,'contact']);
Route::get('/tendik',[TendikController::class,'index']);
Route::get('/tendik/create',[TendikController::class,'create']);
Route::post('/tendik/store',[TendikController::class,'store']);
Route::get('/tendik/{id}/edit',[TendikController::class,'edit']);
Route::post('/tendik/{id}/update',[TendikController::class,'update']);
Route::get('/tendik/{id}/delete',[TendikController::class,'destroy']);
