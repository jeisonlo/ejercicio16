<?php
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\EquipoController;
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


Route::post('jugador/store', [JugadorController::class, 'store'])->name('jugador.store');
Route::get('jugador/create', [JugadorController::class, 'create']);
Route::get('jugador/listar', [JugadorController::class, 'index'])->name('jugador.index');
Route::get('jugador/{jugador}', [JugadorController::class, 'show'])->name('jugador.show');
Route::delete('jugador/{jugador}', [JugadorController::class, 'destroy'])->name('jugador.destroy');
Route::put('jugador/{jugador}', [JugadorController::class, 'update'])->name('jugador.update');
Route::get('jugador/{jugador}/editar', [JugadorController::class, 'edit'])->name('jugador.edit');

Route::post('equipo/store', [EquipoController::class, 'store'])->name('equipo.store');
Route::get('equipo/create', [EquipoController::class, 'create']);
Route::get('equipo/listar', [EquipoController::class, 'index'])->name('equipo.index');
Route::get('equipo/{equipo}', [EquipoController::class, 'show'])->name('equipo.show');
Route::delete('equipo/{equipo}', [EquipoController::class, 'destroy'])->name('equipo.destroy');
Route::put('equipo/{equipo}', [EquipoController::class, 'update'])->name('equipo.update');
Route::get('equipo/{equipo}/editar', [EquipoController::class, 'edit'])->name('equipo.edit');