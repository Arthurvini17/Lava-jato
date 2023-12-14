<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VeicController;
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

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/edit/{veiculo}/edit', [VeicController::class, 'edit'])->name('edit.veic');

Route::post('/veiculo/{veiculo}', [VeicController::class, 'update'])->name('update.veic');
