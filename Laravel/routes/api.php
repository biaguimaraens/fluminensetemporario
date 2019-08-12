<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/jogador/{id}','JogadorController@showJogador');
Route::post('/jogador', 'JogadorController@createJogador');
Route::put('/jogador/{id}', 'JogadorController@updateJogador');
Route::delete('/jogador/{id}', 'JogadorController@destroyJogador');

Route::get('/departamento','DepartamentoController@listDepartamentos');
Route::get('/departamento/{id}','DepartamentoController@showDepartamento');
Route::post('/departamento', 'DepartamentoController@createDepartamento');
Route::put('/departamento/{id}', 'DepartamentoController@updateDepartamento');
Route::delete('/departamento/{id}', 'DepartamentoController@destroyDepartamento');

Route::get('/atividade','AtividadeController@index');
Route::get('/atividade/{id}','AtividadeController@show');
Route::post('/atividade', 'AtividadeController@store');
Route::put('/atividade/{id}', 'AtividadeController@update');
Route::delete('/atividade/{id}', 'AtividadeController@destroy');