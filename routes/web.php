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

Route::middleware(['auth:sanctum', 'verified'])->get('/') ;

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/Acerca_de', function () {
    return view('Acerca_de');
})->name('Acerca_de');
Route::middleware(['auth:sanctum', 'verified'])->get('/Servicios', function () {
    return view('Servicios');
})->name('Servicios');
Route::middleware(['auth:sanctum', 'verified'])->get('/Contacto', function () {
    return view('Contacto');
})->name('Contacto');
Route::middleware(['auth:sanctum', 'verified'])->get('/Preguntas_Frecuentes', function () {
    return view('Preguntas_Frecuentes');
})->name('Preguntas_Frecuentes');

Route::post('login', 'LoginController@index')->name('login');
Route::get('admin/dashboard', function(){
    return view('Administrador.Administrador');
})->name('admin');
