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


Route::group([
    'middleware' => 'auth:api'
  ], function () {

    Route::get('/jogadores','JogadorController@cardsJogadores');
    Route::get('/jogador','JogadorController@cardsJogadoresFluminense');
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

    Route::get('/dado_medico','DadoMedicoController@index');
    Route::get('/dado_medico/{id}','DadoMedicoController@show');
    Route::post('/dado_medico', 'DadoMedicoController@store');
    Route::put('/dado_medico/{id}', 'DadoMedicoController@update');
    Route::delete('/dado_medico/{id}', 'DadoMedicoController@destroy');

});