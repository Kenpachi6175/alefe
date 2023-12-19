<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;


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

Route::get('/teste', function () {
    return view('tela');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.index'); 
Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produto.create'); 
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produto.store'); 
Route::get('/produtos/{produto}', [ProdutoController::class, 'show'])->name('produto.show');
Route::get('/produtos/{produto}/edit', [ProdutoController::class, 'edit'])->name('produto.edit'); 
Route::put('/produtos/{produto}', [ProdutoController::class, 'update'])->name('produto.update'); 
Route::delete('/produtos/{produto}', [ProdutoController::class, 'destroy'])->name('produto.destroy'); 



Route::resource('/user', UserController::class);
