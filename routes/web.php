<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {   
});

Route::controller(NoteController::class)->group(function(){
    Route::get('/notas', 'index')->name('notas.index');
    Route::get('notas/crear', 'create')->name('notas.crear');
    Route::post('/notas/save','store')->name('notas.guardar');
    Route::get('/notas/{note}/', 'edit')->name('edit-note');
    Route::post('/notas/{note}/', 'update')->name('update-note');
    Route::get('/notas/{note}/delete', 'destroy')->name('delete.note');
});


Route::controller(UserController::class)->group(function(){
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate','authenticate')->name('authenticate');
});