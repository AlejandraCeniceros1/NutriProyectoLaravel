<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Api\PacienesNutriController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//Route::get('/pacientes','Api\\PacienesNutriController@index')->name('api.pacientes.index');
Route::get('/pacientes',[Api\PacienesNutriController::class,'index'])->name('pacientes.index');

//Route::get('pacientes/{id}','Api\\PacienesNutriController@show')->name('api.pacientes.show');
Route::get('/pacientes/{id}',[Api\PacienesNutriController::class,'show'])->name('pacientes.show');
