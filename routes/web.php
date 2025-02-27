<?php

use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    return view('welcome', ['message' => 'Bienvenido a la Guía de Equipos de fútbol femenino.']);
});


Route::get('/equipos', [EquipoController::class, 'index'])->name('equipos.index');
Route::get('/equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
Route::get('/equipos/{id}', [EquipoController::class, 'show'])->name('equipos.show');
Route::post('/equipos', [EquipoController::class, 'store'])->name('equipos.store');
Route::get('/equipos/{id}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');
Route::put('/equipos/{id}', [EquipoController::class, 'update'])->name('equipos.update');
Route::delete('/equipos/{id}', [EquipoController::class, 'destroy'])->name('equipos.destroy');

