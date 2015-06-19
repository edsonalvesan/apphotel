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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');



Route::group(['prefix' => 'api'], function() {
    
    Route::get('usuarios',        ['uses' => 'UsuarioController@usuariosForSelect']);

});

Route::group(['prefix'=>'usuarios','where'=>['id'=>'[0-9]+']],function() {
 
    Route::get('',                ['as'=>'usuarios',               'uses'=>'UsuarioController@index']);
    
    Route::get('create',          ['as'=>'usuarios.create',        'uses'=>'UsuarioController@create']);

    Route::get('{id}/view',       ['as'=>'usuarios.view',          'uses'=>'UsuarioController@view']);

    Route::post('store',          ['as'=>'usuarios.store',         'uses'=>'UsuarioController@store']);

    Route::delete('{id}/destroy', ['as'=>'usuarios.destroy',       'uses'=>'UsuarioController@destroy']);

    Route::get('{id}/editar',     ['as'=>'usuarios.edit',          'uses'=>'UsuarioController@edit']);

    Route::post('{id}/update',    ['as'=>'usuarios.update',        'uses'=>'UsuarioController@update']);       
});

Route::group(['prefix'=>'proprietarios','where'=>['id'=>'[0-9]+']],function() {
 
    Route::get('',           ['as'=>'proprietarios',          'uses'=>'ProprietarioController@index']);
    
    Route::get('create',          ['as'=>'proprietarios.create',   'uses'=>'ProprietarioController@create']);

    Route::post('store',          ['as'=>'proprietarios.store',    'uses'=>'ProprietarioController@store']);

    Route::delete('{id}/destroy', ['as'=>'proprietarios.destroy',  'uses'=>'ProprietarioController@destroy']);

    Route::get('{id}/editar',       ['as'=>'proprietarios.edit',     'uses'=>'ProprietarioController@edit']);

    Route::post('{id}/update',    ['as'=>'proprietarios.update',   'uses'=>'ProprietarioController@update']);       
});

Route::group(['prefix'=>'imobiliarias','where'=>['id'=>'[0-9]+']],function() {
 
    Route::get('',                ['as'=>'imobiliarias', 'uses'=>'ImobiliariaController@index']);
    
    Route::get('create',          ['as'=>'imobiliarias.create', 'uses'=>'ImobiliariaController@create']);

    Route::post('store',          ['as'=>'imobiliarias.store', 'uses'=>'ImobiliariaController@store']);

    Route::delete('{id}/destroy', ['as'=>'imobiliarias.destroy', 'uses'=>'ImobiliariaController@destroy']);

    Route::get('{id}/editar',       ['as'=>'imobiliarias.edit', 'uses'=>'ImobiliariaController@edit']);

    Route::post('{id}/update',    ['as'=>'imobiliarias.update', 'uses'=>'ImobiliariaController@update']);       
});

Route::group(['prefix'=>'hotel','where'=>['id'=>'[0-9]+']],function() {
 
    Route::get('',                ['as'=>'hotel', 'uses'=>'HotelController@index']);
    
    Route::get('create',          ['as'=>'hotel.create', 'uses'=>'HotelController@create']);

    Route::post('store',          ['as'=>'hotel.store', 'uses'=>'HotelController@store']);

    Route::delete('{id}/destroy', ['as'=>'hotel.destroy', 'uses'=>'HotelController@destroy']);

    Route::get('{id}/editar',       ['as'=>'hotel.edit', 'uses'=>'HotelController@edit']);

    Route::post('{id}/update',    ['as'=>'hotel.update', 'uses'=>'HotelController@update']);       
});



Route::group(['prefix'=>'contratos','where'=>['id'=>'[0-9]+']],function() {
 
    Route::get('',                ['as'=>'contratos', 'uses'=>'ContratoController@index']);
    
    Route::get('create',          ['as'=>'contratos.create', 'uses'=>'ContratoController@create']);

    Route::post('store',          ['as'=>'contratos.store', 'uses'=>'ContratoController@store']);

    Route::delete('{id}/destroy', ['as'=>'contratos.destroy', 'uses'=>'ContratoController@destroy']);

    Route::get('{id}/editar',       ['as'=>'contratos.edit', 'uses'=>'ContratoController@edit']);

    Route::post('{id}/update',    ['as'=>'contratos.update', 'uses'=>'ContratoController@update']); 

    Route::get('{id}/arquivos',   ['as'=>'arquivos', 'uses'=>'FileController@index']);
    
    Route::post('{contratoId}/upload', ['as' => 'files.upload', 'uses' => 'FileController@upload']);
    
    Route::get('{contratoId}/download/{fileId}', ['as' => 'files.download', 'uses' => 'FileController@download']);
    
    Route::get('{contratoId}/remover/{fileId}',  ['as' => 'files.destroy', 'uses' => 'FileController@destroy']);      
});




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
