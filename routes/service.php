<?php

use App\Http\Controllers\ReservaserviceController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/servicio', [ServiceController::class, 'index'])->name('servicio');
Route::get('/servicio/create', [ServiceController::class, 'create'])->name('servicio.create');
Route::post('/servicio/store', [ServiceController::class, 'store'])->name('servicio.store');

Route::get('/servicio/buscar', [ServiceController::class, 'buscar'])->name('servicio.buscar');
Route::get('/servicio/buscador', [ServiceController::class, 'buscador'])->name('servicio.buscador');

Route::post('/servicio/agregar', [ReservaserviceController::class, 'store'])->name('reservaservice.store');
Route::post('/servicio/mostrar', [ReservaserviceController::class, 'show'])->name('reservaservice.show');
Route::post('/servicio/editar/{id}', [ReservaserviceController::class, 'edit'])->name('reservaservice.edit');
Route::post('/servicio/borrar/{id}', [ReservaserviceController::class, 'destroy'])->name('reservaservice.destroy');
Route::get('/servicio/pagar/{reservaservice}', [ReservaserviceController::class, 'pagar'])->name('reservaservice.pagar');




