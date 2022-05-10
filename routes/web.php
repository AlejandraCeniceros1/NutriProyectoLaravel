<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PacienesNutriController;



Route::get('/', function () {
    return view('welcome');
});

//Route::get('/pacientes/create','PacienesNutriController@create')-> name('pacientes.create');
Route::get('/pacientes/create',[PacienesNutriController::class,'create'])->name('pacientes.create');

//Route::post('/pacientes','PacienesNutriController@store')-> name('pacientes.store');
Route::post('/pacientes',[PacienesNutriController::class,'store'])-> name('pacientes.store');