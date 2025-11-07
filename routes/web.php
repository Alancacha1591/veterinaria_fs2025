<?php

use App\Http\Controllers\MedicinasController;
use App\Http\Controllers\VeterinariosController;
use App\Http\Controllers\PacientesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\ExpedientesController;
use App\Models\Expedientes;

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
    return view('welcome');
});

//Veterinarios
Route::post('/veterinarios', [VeterinariosController::class, 'store'])->name('veterinarios.store');

Route::get('/veterinarios', [VeterinariosController::class, 'index']);

Route::get('/veterinarios/create', [VeterinariosController::class, 'create'])->name('veterinarios.create');

Route::resource('veterinarios', App\Http\Controllers\VeterinariosController::class);

Route::get('/veterinarios/{id}', [VeterinariosController::class, 'show'])->name('veterinarios.show');

Route::get('/veterinarios/{id}/edit', [VeterinariosController::class, 'edit'])->name('veterinarios.edit');

Route::put('/veterinarios/{id}', [VeterinariosController::class, 'update'])->name('veterinarios.update');

Route::delete('/veterinarios/{id}', [VeterinariosController::class, 'destroy'])->name('veterinarios.destroy');

//Medicinas
Route::post('/medicinas', [MedicinasController::class, 'store'])->name('medicinas.store');

Route::get('/medicinas', [MedicinasController::class, 'index']);

Route::get('/medicinas/create', [MedicinasController::class, 'create'])->name('medicinas.create');

Route::resource('medicinas', App\Http\Controllers\MedicinasController::class);

Route::get('/medicinas/{id}', [MedicinasController::class, 'show'])->name('medicinas.show');

Route::get('/medicinas/{id}/edit', [MedicinasController::class, 'edit'])->name('medicinas.edit');

Route::put('/medicinas/{id}', [MedicinasController::class, 'update'])->name('medicinas.update');

Route::delete('/medicinas/{id}', [MedicinasController::class, 'destroy'])->name('medicinas.destroy');

//Pacientes
Route::post('/pacientes', [PacientesController::class, 'store'])->name('pacientes.store');

Route::get('/pacientes', [PacientesController::class, 'index']);

Route::get('/pacientes/create', [PacientesController::class, 'create'])->name('pacientes.create');

Route::resource('pacientes', App\Http\Controllers\PacientesController::class);

Route::get('/pacientes/{id}', [PacientesController::class, 'show'])->name('pacientes.show');

Route::get('/pacientes/{id}/edit', [PacientesController::class, 'edit'])->name('pacientes.edit');

Route::put('/pacientes/{id}', [PacientesController::class, 'update'])->name('pacientes.update');

Route::delete('/pacientes/{id}', [PacientesController::class, 'destroy'])->name('pacientes.destroy');

//Citas
Route::post("/citas",[CitasController::class,'store'])->name('citas.store');

Route::get("/citas",[CitasController::class,'index']);

Route::get("/citas/create",[CitasController::class,'create'])->name('citas.create');

Route::resource('citas', App\Http\Controllers\CitasController::class);

Route::get("citas/{id}", [CitasController::class,'show'])->name('citas.show');

Route::get("citas/{id}/edit", [CitasController::class,'edit'])->name('citas.edit');

Route::put("citas/{id}", [CitasController::class,'update'])->name('citas.update');

Route::delete("citas/{id}", [CitasController::class,'destroy'])->name('citas.destroy');

//Expedientes
Route::post('/expedientes',[ExpedientesController::class,'store'])->name('expedientes.store');

Route::get('/expedientes', [ExpedientesController::class, 'index'])->name('expedientes.index');

Route::get('/expedientes/create', [ExpedientesController::class, 'create'])->name('expedientes.create');

Route::resource('expedientes', App\Http\Controllers\ExpedientesController::class);

Route::get('/expedientes/{id}', [ExpedientesController::class, 'show'])->name('expedientes.show');

Route::get('/expedientes/{id}/edit', [ExpedientesController::class, 'edit'])->name('expedientes.edit');

Route::put('/expedientes/{id}', [ExpedientesController::class, 'update'])->name('expedientes.update');

Route::delete('/expedientes/{id}', [ExpedientesController::class, 'destroy'])->name('expedientes.destroy');