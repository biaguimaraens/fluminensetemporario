<?php

namespace App\Http\Controllers;

use App\DadoMedico;
use App\Http\Resources\DadoMedicoResource;
use Illuminate\Http\Request;
use App\Http\Requests\DadoMedicoRequest;

class DadoMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DadoMedicoResource::collection(DadoMedico::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DadoMedicoRequest $request)
    {
        $dado_medico = new DadoMedico;
        $dado_medico->registrarDadoMedico($request);

        return new DadoMedicoResource($dado_medico);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DadoMedico  $dadoMedico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dado_medico = DadoMedico::findOrFail($id);

        return new DadoMedicoResource($dado_medico);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DadoMedico  $dadoMedico
     * @return \Illuminate\Http\Response
     */
    public function edit(DadoMedico $dadoMedico)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DadoMedico  $dadoMedico
     * @return \Illuminate\Http\Response
     */
    public function update(DadoMedicoRequest $request, $id)
    {
        $dado_medico = DadoMedico::findOrFail($id);
        $dado_medico->atualizarDadoMedico($request);
        

        return new DadoMedicoResource($dado_medico);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DadoMedico  $dadoMedico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dado_medico = DadoMedico::findOrFail($id);
        $dado_medico->delete();
    }
}
