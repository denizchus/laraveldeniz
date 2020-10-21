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
    return view('welcome');
})->name('index');

Route::get('/funcion', function () {
    return view('funcion');
})->name('funcion');

Route::get('/tips', function () {
    return view('tips');
})->name('tips');

Route::get('/sugerencias', function () {
    return view('sugerencias');
})->name('sugerencias');

Route::get('/preguntas', function () {
    return view('preguntas');
})->name('preguntas');

