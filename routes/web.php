<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TiketController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tiket',[TiketController::class,'index']);
Route::get('/tiket/create',[TiketController::class,'create']);
Route::post('/tiket/store',[TiketController::class,'store']);
Route::get('/tiket/{id}/edit',[TiketController::class,'edit']);
Route::put('/tiket/{id}',[TiketController::class,'update']);
Route::delete('/tiket/{id}',[TiketController::class,'destroy']);