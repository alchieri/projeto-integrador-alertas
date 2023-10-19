<?php

namespace App\Http\Controllers;

use App\Models\Compromisso;
use Illuminate\Http\Request;

class CompromissoController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['index','show','store','update','edit','create']);
        /**
         * Comentário para tratar conflitos.
         */
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compromisso = Compromisso::all();
        return view('compromissos.index')->with('compromissos', $compromisso);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('compromissos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $compromisso = new Compromisso();

        $compromisso->tipo = $request->input('tipo');
        $compromisso->nome = $request->input('nome');
        $compromisso->data_inicio = $request->input('data_inicio');
        $compromisso->descricao = $request->input('descricao');
        $compromisso->hora_inicio = $request->input('hora_inicio');
        $compromisso->hora_fim = $request->input('hora_fim');
        $compromisso->repeticao = $request->input('repeticao');
        $compromisso->data_fim = $request->input('data_fim');
        $compromisso->tipo_recorrencia = $request->input('tipo_recorrencia');
        $compromisso->dias_semana = $request->input('dias_semana');
        $compromisso->financeiro = $request->input('financeiro');
        $compromisso->valor = $request->input('valor');
        

        $compromisso->save();

        $compromisso = Compromisso::all();
        return view('compromissos.index')->with('compromissos', $compromisso)
            ->with('msg', 'Compromisso cadastrado com sucesso!');            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $compromisso = Compromisso::find($id);
        if ($compromisso) {
            return view('compromissos.edit')->with('compromissos', $compromisso);
        } else {
            $compromisso = Compromisso::all();
            return view('compromissos.index')->with('compromissos', $compromisso)
                ->with('msg', 'Compromisso não encontrado!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $compromisso = Compromisso::find($id);

        $compromisso->delete();

        $compromisso = Compromisso::all();
        return view('compromissos.index')->with('compromissos', $compromisso)
            ->with('msg', 'Compromisso excluído com sucesso!');
    }
}
