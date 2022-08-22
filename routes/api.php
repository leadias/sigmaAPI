<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/partipante/guardar', 'App\Http\Controllers\TaskController@store');
Route::get('/departamentos', 'App\Http\Controllers\TaskController@index');
Route::get('/ciudades', 'App\Http\Controllers\TaskController@city');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
