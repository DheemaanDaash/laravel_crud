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

Route::get('/','App\Http\Controllers\Crud@index');
Route::post('/Add_data','App\Http\Controllers\Crud@add_data');

Route::get('/Delete/{id}','App\Http\Controllers\Crud@delete');
Route::get('/Edit/{id}','App\Http\Controllers\Crud@edit');
Route::post('/Update_data','App\Http\Controllers\Crud@Update_data');
?>