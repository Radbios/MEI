<?php

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
    return view('home');
});

Route::get('/visaogeral', function () {
    return view('dashboard');
});

Route::get('/clientes', function () {
    return view('client');
});

Route::get('/encomendas', function () {
    return view('encomendas');
});

Route::get('/estoque', function () {
    return view('estoque');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/login', function () {
    return view('signIn');
});

Route::get('/recuperacao', function () {
    return view('recover');
});

Route::get('/vendas', function () {
    return view('vendas');
});