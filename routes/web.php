<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;

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

//CITAS
Route::post("/citas",[CitasController::class,'store'])
    ->name('citas.store');
Route::get("/citas",[CitasController::class,'index']);
Route::get("/citas/create",[CitasController::class,'create'])
    ->name('citas.create');
Route::resource('citas', App\Http\Controllers\CitasController::class);
Route::get("citas/{id}", [CitasController::class,'show'])
    ->name('citas.show');
Route::get("citas/{id}/edit", [CitasController::class,'edit'])
    ->name('citas.edit');
Route::put("citas/{id}", [CitasController::class,'update'])
    ->name('citas.update');
Route::delete("citas/{id}", [CitasController::class,'destroy'])
    ->name('citas.destroy');