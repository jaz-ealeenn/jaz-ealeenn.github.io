<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\TicketComponent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketController;

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
Route::get('admin/ticket', [TicketController::class, 'index'])->name('ticket.admin.index');


Route::get('ticket' ,[TicketController::class, 'index'])->name('ticket.index');

Route::post('ticket' ,[TicketController::class, 'store'])->name('ticket.store');
Route::get('ticket/create',[TicketController::class, 'create'])->name('ticket.create');
Route::get('ticket/{id}', [TicketController::class,'show'])->name('ticket.show');
 
Route::get('inicio', [LoginController::class, 'index'])->name('inicio')->middleware('auth');

 Route::get('/', [LoginController::class, 'index'])->middleware('auth') ;

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

 
Route::get('admin/dashboard', function () {
    $user = Auth::user();
    $acceso = $user->id_tipo_usuario;
    switch($acceso){
        
        case '1':
            return redirect()->route('inicio');
        break;
        case '3':
            return redirect()->route('inicio');
        break;
        case '2':
            return redirect()->route('inicio');
        break;
       
    }    
        
    return view('Administrador.Administrador', compact('user'));
})->name('admin');
