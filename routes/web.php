<?php

use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('produtos', ProdutoController::class);
Route::resource('estoques', EstoqueController::class);
Route::resource('vendas', VendaController::class);
Route::resource('fornecedores', FornecedorController::class);
