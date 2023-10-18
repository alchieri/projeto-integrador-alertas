<?php

namespace App\Http\Controllers;

use App\Models\ConfigNotificacao;
use Illuminate\Http\Request;

class ConfigNotificacaoController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->only(['index','show','store','update','edit','create']);
    }
    
    public function index()
    {
        $configNotificacaos = ConfigNotificacao::all();

        return view('confignotificacaos.index')->with('confignotificacaos', $configNotificacaos);
    }

    public function create()
    {
        return view('confignotificacaos.create');
    }

    public function store(Request $request)
    {
        $configNotificacao = new ConfigNotificacao();

        $configNotificacao->descricao = $request->input('descricao');
        $configNotificacao->tipo = $request->input('tipo');
        $configNotificacao->data_notificacao = $request->input('data_notificacao');
        $configNotificacao->hora_notificacao = $request->input('hora_notificacao');

        $configNotificacao->save();

        $configNotificacaos = ConfigNotificacao::all();
        return view('confignotificacaos.index')->with('confignotificacaos', $configNotificacaos)
                ->with('msg', 'Config cadastrada com sucesso!');
    }

    public function show($id)
    {
        $configNotificacao = ConfigNotificacao::find($id);
        if ($configNotificacao) {
            return view('confignotificacaos.show')->with('confignotificacao', $configNotificacao);
        } else {
            return view('confignotificacaos.show')->with('msg', 'Config não encontrada!');
        }
    }

    public function edit($id)
    {
        $configNotificacao = ConfigNotificacao::find($id);
        if ($configNotificacao) {
            return view('confignotificacaos.edit')->with('confignotificacao', $configNotificacao);
        } else {
            $configNotificacaos = ConfigNotificacao::all();
            return view('confignotificacaos.index')->with('confignotificacaos', $configNotificacaos)
                ->with('msg', 'Config não encontrada!');
        }
    }

    public function update(Request $request, $id)
    {
        $configNotificacao = ConfigNotificacao::find($id);
        
        $configNotificacao->descricao = $request->input('descricao');
        $configNotificacao->tipo = $request->input('tipo');
        $configNotificacao->data_notificacao = $request->input('data_notificacao');
        $configNotificacao->hora_notificacao = $request->input('hora_notificacao');

        $configNotificacao->save();

        $configNotificacaos = ConfigNotificacao::all();
        return view('confignotificacaos.index')->with('confignotificacaos', $configNotificacaos)
            ->with('msg', 'Config atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $configNotificacao = ConfigNotificacao::find($id);

        $configNotificacao->delete();

        $configNotificacaos = ConfigNotificacao::all();
        return view('confignotificacaos.index')->with('confignotificacaos', $configNotificacaos)
            ->with('msg', 'Config excluída com sucesso!');
    }
}
