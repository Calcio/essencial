<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Router::get('produtos','ProdutosController@index');

Route::group(['prefix' => 'produtos', 'where' => ['id' => '[0-9]+']], function (){
    Route::get('', ['as' => 'produtos', 'uses' => 'ProdutosController@index']);
    Route::get('create', ['as' => 'produtos.create', 'uses' => 'ProdutosController@create']);
    Route::post('store', ['as' => 'produtos.store', 'uses' => 'ProdutosController@store']);
    Route::get('destroy/{id}', ['as' => 'produtos.destroy', 'uses' => 'ProdutosController@destroy']);
    Route::get('edit/{id}', ['as' => 'produtos.edit', 'uses' => 'ProdutosController@edit']);
    Route::put('update/{id}', ['as' => 'produtos.update', 'uses' => 'ProdutosController@update']);
    Route::get('view/{id}', ['as' => 'produtos.view', 'uses' => 'ProdutosController@view']);
});
