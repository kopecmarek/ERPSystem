<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('createfirebase',[App\Http\Controllers\databaseController::class, 'create']);
Route::get('showfirebase',[App\Http\Controllers\databaseController::class, 'index']);
Route::get('test',[App\Http\Controllers\firebaseLogic::class, 'stworz']);
