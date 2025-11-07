<?php

use App\Http\Controllers\VeterinariosController;
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
    return view('welcome');
});
Route::post('/veterinarios', [VeterinariosController::class, 'store'])->name('veterinarios.store');

Route::get('/veterinarios', [VeterinariosController::class, 'index']);

Route::get('/veterinarios/create', [VeterinariosController::class, 'create'])->name('veterinarios.create');

Route::resource('veterinarios', App\Http\Controllers\VeterinariosController::class);

Route::get('/veterinarios/{id}', [VeterinariosController::class, 'show'])->name('veterinarios.show');

Route::get('/veterinarios/{id}/edit', [VeterinariosController::class, 'edit'])->name('veterinarios.edit');

Route::put('/veterinarios/{id}', [VeterinariosController::class, 'update'])->name('veterinarios.update');

Route::delete('/veterinarios/{id}', [VeterinariosController::class, 'destroy'])->name('veterinarios.destroy');