<?php

namespace App\Http\Controllers;

use App\Atividade;
use App\Http\Resources\AtividadeResource;
use Illuminate\Http\Request;
use App\Http\Requests\AtividadeRequest;

class AtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AtividadeResource::collection(Atividade::all());
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
    public function store(AtividadeRequest $request)
    {
        $atividade = new Atividade;
        $atividade->cadastrarAtividade($request);

        return new AtividadeResource($atividade);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atividade = Atividade::findOrFail($id);

        return new AtividadeResource($atividade);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function edit(Atividade $atividade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(AtividadeRequest $request, $id)
    {
        $atividade = Atividade::findOrFail($id);
        $atividade->atualizarAtividade($request);
        

        return new AtividadeResource($atividade);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atividade = Atividade::findOrFail($id);
        $atividade->delete();
    }
}
