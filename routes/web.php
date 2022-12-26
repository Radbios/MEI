<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Route::get('/visaogeral', function () {
    return view('dashboard');
});

    // --- REGISTRO --- //
    Route::get('/register', [RegisterController::class, 'create'])->middleware('guest'); // view
    Route::post('/register', [RegisterController::class, 'store'])->middleware('guest'); // criacao
    // --- SESSAO --- //
    Route::get('/login', [SessionsController::class, 'create'])->middleware('guest'); // view
    Route::post('/login', [SessionsController::class, 'store'])->middleware('guest'); // autenticacao
    Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth'); // logout
    // --- ENDEREÇO ---

Route::post('/endereco/store', [AddressController::class, 'store'])->name('endereco.store');
Route::put('/endereco/update', [AddressController::class, 'update'])->name('endereco.update');

        // --- ---

    // --- CLIENTES ---
Route::get('/clientes', [ClientController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClientController::class, 'create'])->name('clientes.create');
Route::post('/clientes/store', [ClientController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{client_id}', [ClientController::class, 'show'])->name('clientes.show');
Route::get('/clientes/edit/{client_id}', [ClientController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/update/{client_id}', [ClientController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/delete/{client_id}', [ClientController::class, 'delete'])->name('clientes.delete');
Route::post('/clientes/search', [ClientController::class, 'search'])->name('clientes.search');

    // --- ---

    // --- ENCOMENDAS ---

Route::get('/encomendas', [OrderController::class, 'index'])->name('encomendas.index');
Route::get('/encomendas/create', [OrderController::class, 'create'])->name('encomendas.create');
Route::post('/encomendas/store', [OrderController::class, 'store'])->name('encomendas.store');
Route::get('/encomendas/{encomendas_id}', [OrderController::class, 'show'])->name('encomendas.show');
Route::get('/encomendas/edit/{encomendas_id}', [OrderController::class, 'edit'])->name('encomendas.edit');
Route::put('/encomendas/update/{encomendas_id}', [OrderController::class, 'update'])->name('encomendas.update');
Route::delete('/encomendas/delete/{encomendas_id}', [OrderController::class, 'delete'])->name('encomendas.delete');

    // --- ---

    // --- ESTOQUES ---

 Route::get('/estoque', [MaterialController::class, 'index'])->name('estoque.index');
 Route::get('/estoque/create', [MaterialController::class, 'create'])->name('estoque.create');
 Route::post('/estoque/store', [MaterialController::class, 'store'])->name('estoque.store');
 Route::get('/estoque/{estoque_id}', [MaterialController::class, 'show'])->name('estoque.show');
 Route::get('/estoque/edit/{estoque_id}', [MaterialController::class, 'edit'])->name('estoque.edit');
 Route::put('/estoque/update', [MaterialController::class, 'update'])->name('estoque.update');
 Route::delete('/estoque/delete/{estoque_id}', [MaterialController::class, 'delete'])->name('estoque.delete');
    // --- ---

    // --- PRODUTOS ---
Route::get('/produtos', [ProductController::class, 'index'])->name('produtos.index');
Route::get('/produtos/create', [ProductController::class, 'create'])->name('produtos.create');
Route::post('/produtos/store', [ProductController::class, 'store'])->name('produtos.store');
Route::get('/produtos/{produtos_id}', [ProductController::class, 'show'])->name('produtos.show');
Route::get('/produtos/edit/{produtos_id}', [ProductController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/update/{produtos_id}', [ProductController::class, 'update'])->name('produtos.update');
Route::delete('/produtos/delete/{produtos_id}', [ProductController::class, 'delete'])->name('produtos.delete');
    // --- ---

// Route::get('/login', function () {
//     return view('sessions.create');
// });

Route::get('/recuperacao', function () {
    return view('recover');
});

    // --- VENDAS ---

Route::get('/vendas', [SellController::class, 'index'])->name('vendas.index');
Route::get('/vendas/create', [SellController::class, 'create'])->name('vendas.create');
Route::post('/vendas/store', [SellController::class, 'store'])->name('vendas.store');
Route::get('/vendas/{vendas_id}', [SellController::class, 'show'])->name('vendas.show');
Route::get('/vendas/edit/{vendas_id}', [SellController::class, 'edit'])->name('vendas.edit');
Route::put('/vendas/update', [SellController::class, 'update'])->name('vendas.update');
Route::delete('/vendas/delete/{vendas_id}', [SellController::class, 'delete'])->name('vendas.delete');
    // --- ---

    // --- MATERIAIS ---

Route::get('/materiais', [MaterialController::class, 'index'])->name('materiais.index');
Route::get('/materiais/create', [MaterialController::class, 'create'])->name('materiais.create');
Route::post('/materiais/store', [MaterialController::class, 'store'])->name('materiais.store');
Route::get('/materiais/{material_id}', [MaterialController::class, 'show'])->name('materiais.show');
Route::get('/materiais/edit/{material_id}', [MaterialController::class, 'edit'])->name('materiais.edit');
Route::put('/materiais/update', [MaterialController::class, 'update'])->name('materiais.update');
Route::delete('/materiais/delete/{material_id}', [MaterialController::class, 'delete'])->name('materiais.delete');

    // --- ---
