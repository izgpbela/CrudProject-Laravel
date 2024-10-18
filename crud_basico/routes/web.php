<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', 'ProdutoController@create');
Route::post('/produtos/novo', 'ProdutoController@store')->name('registrar_produto');
Route::get('/produtos/ver\{id}', 'ProdutoController@show');
Route::get('/produtos/editar\{id}', 'ProdutoController@edit');
Route::post('/produtos/editar\{id}', 'ProdutoController@update')->name('alterar_produto');
Route::get('/produtos/excluir\{id}', 'ProdutoController@delete');
Route::post('/produtos/excluir\{id}', 'ProdutoController@delete')->name('excluir_produto');