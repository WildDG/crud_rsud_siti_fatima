<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('alldata', [\App\Http\Controllers\PasienController::class, 'show']);
Route::post('edit', [\App\Http\Controllers\PasienController::class, 'edit']);
Route::post('simpan', [\App\Http\Controllers\PasienController::class, 'store']);
Route::post('update', [\App\Http\Controllers\PasienController::class, 'update']);
Route::post('delete', [\App\Http\Controllers\PasienController::class, 'delete']);
Route::get('/', function () {
    return view('welcome');
});
