<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use \App\Http\Controllers\EstadiosController;
use \App\Http\Controllers\PerfisController;
use App\Models\Estadios;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::model('estadio', Estadios::class);
Route::get('/estadios/remover/{estadio}', [EstadiosController::class, 'destroy'])->name('rm-estadio');
Route::post('/perfis/novo', [PerfisController::class, 'store'])->name('add-perfil');
Route::post('/estadios/novo', [EstadiosController::class, 'store'])->name('add-estadio');

require __DIR__.'/auth.php'; 

require __DIR__.'/auth.php';
