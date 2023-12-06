<?php

use App\Http\Controllers\CompromissoController;
use App\Http\Controllers\ConfigNotificacaoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\InicioController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::controller(InicioController::class)->group(function () {
//    Route::get('/inicio', 'inicio');
// })->middleware(['auth', 'verified'])->name('inicio');

Route::get('/inicio', [InicioController::class, 'inicio'], function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('inicio');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('usuarios', UsuarioController::class);
Route::resource('confignotificacaos', ConfigNotificacaoController::class);
Route::resource('compromissos', CompromissoController::class);

Route::delete('/compromissos/{id}', 'CompromissoController@destroy');



require __DIR__.'/auth.php';
