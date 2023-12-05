<?php

namespace App\Http\Controllers;

use App\Models\Compromisso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function create(Request $request)
    {
        $year = $request->query('year');
        $month = $request->query('month');
        $day = $request->query('day');
        $dataInicio = $year."-".$month."-".$day;
        if($request->query('day') == null) {
            $compromisso = null;
            return view('compromissos.create')->with('year', $year)->with('month', $month)->with('day', $day)->with('compromissos', $compromisso);
        } else{
            $compromisso = Compromisso::query()
                ->where('data_inicio', '=', $dataInicio)
                // ->where('tipo', '=', 'pontual')
                ->orWhere('data_inicio','<=', $dataInicio)
                ->where('data_fim', '>=', $dataInicio)->get();
            return view('compromissos.create')->with('year', $year)->with('month', $month)->with('day', $day)->with('compromissos', $compromisso);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = $request->input('id');
        if($id != null){
            $this->update($request, $id);
        } else {
            $year = $request->query('year');
            $month = $request->query('month');
            $day = $request->query('day');
            $compromisso = new Compromisso();
            
            $compromisso->tipo = $request->input('tipo');

            if ($compromisso->tipo == 'option1') {
                $compromisso->hora_inicio = $request->input('hora_inicio_pontual');
                $compromisso->tipo = 'pontual';
                $compromisso->data_inicio = $request->input('data_inicio_pontual');
            } elseif ($compromisso->tipo == 'option2') {
                $compromisso->hora_inicio = $request->input('hora_inicio_recorrente');
                $compromisso->tipo = 'recorrente';
                $compromisso->data_inicio = $request->input('data_inicio_recorrente');
                $compromisso->tipo_recorrencia = $request->input('tipo_recorrencia_recorrente');
            } else {
                $compromisso->tipo = 'vencimento';
                $compromisso->data_inicio = $request->input('vencimento');
                $compromisso->financeiro = $request->input('financeiro');
                $compromisso->valor = $request->input('valor');
            }
            
            $compromisso->nome = $request->input('nome');
            $compromisso->descricao = $request->input('descricao');
        
            $compromisso->hora_fim = $request->input('hora_fim');
            $compromisso->repeticao = $request->input('repeticao');
            $compromisso->data_fim = $request->input('data_fim');
            $compromisso->dias_semana = $request->input('dias_semana');
            
            if  ($compromisso->hora_fim == null) {

                $compromisso->hora_fim = $compromisso->hora_inicio;        
            } 
            
            if ($compromisso->data_fim == null) {
                $compromisso->data_fim = $compromisso->data_inicio;
            }
            
            if ($compromisso->tipo == 'vencimento') {
                $compromissoValidacao = Compromisso::query()
                    ->where('tipo', '=', $compromisso->tipo)
                    ->where('data_inicio', '>=' , $compromisso->data_inicio)
                    ->where('data_inicio', '<=' , $compromisso->data_fim)
                    ->get();
            } else {
                $compromissoValidacao = Compromisso::query()
                    ->whereIn('tipo', ['pontual' , 'recorrente'])
                    ->where('data_inicio', '>=' , $compromisso->data_inicio)
                    ->where('data_inicio', '<=' , $compromisso->data_fim)
                    ->where('hora_inicio', '>=', $compromisso->hora_inicio)
                    ->where('hora_inicio', '<=', $compromisso->hora_fim)
                    ->get();
            }

            



            
            if ($compromissoValidacao->count() > 0) {
                // Exibir caixa de diálogo se houver compromisso de validação
                echo '<script type="text/javascript">
                        if (window.confirm("Já existe um compromisso nessa data! \n\nDeseja confirmar o compromisso?")) {
                            
                            

                        } else {
                            
                            history.go(-1);
                        }
                    </script>';
            } else {
                if ($compromisso->tipo == 'recorrente' && $compromisso->tipo_recorrencia == 'recorrencia') {
                    echo '<script type="text/javascript">alert("Selecione uma recorrência! "); history.go(-1);</script>';
                } else {
                    $compromisso->save();

                    $compromisso = Compromisso::all();
                    return view('compromissos.index')->with('compromissos', $compromisso)
                        ->with('msg', 'Compromisso cadastrado com sucesso!');
                }
            }


        }
    }

    public function show(string $id)
    {
        $compromisso = Compromisso::find($id);
        
        if ($compromisso) {
        return view('compromissos.show')->with('compromisso', $compromisso);
        } else {
            return view('compromissos.show')->with('msg', 'Compromisso não encontrado!');
        }
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
    public function update(Request $request, String $id)
    {  
        $compromisso = Compromisso::find($id);
        $compromisso->tipo = $request->input('tipo');

        if ($compromisso->tipo == 'option1') {
            $compromisso->hora_inicio = $request->input('hora_inicio_pontual');
            $compromisso->tipo = 'pontual';
            $compromisso->data_inicio = $request->input('data_inicio_pontual');
        } elseif ($compromisso->tipo == 'option2') {
            $compromisso->hora_inicio = $request->input('hora_inicio_recorrente');
            $compromisso->tipo = 'recorrente';
            $compromisso->data_inicio = $request->input('data_inicio_recorrente');
            $compromisso->tipo_recorrencia = $request->input('tipo_recorrencia_recorrente');
        } else {
            $compromisso->tipo = 'vencimento';
            $compromisso->data_inicio = $request->input('vencimento');
            $compromisso->financeiro = $request->input('financeiro');
            $compromisso->valor = $request->input('valor');
        }
        $compromisso->nome = $request->input('nome');
        $compromisso->descricao = $request->input('descricao');
        $compromisso->hora_fim = $request->input('hora_fim');
        $compromisso->repeticao = $request->input('repeticao');
        $compromisso->data_fim = $request->input('data_fim');
        $compromisso->dias_semana = $request->input('dias_semana');
       
        $compromisso->save();

        $compromisso = Compromisso::all();
        return view('compromissos.index')->with('compromissos', $compromisso)
                    ->with('msg', 'Compromisso atualizado com sucesso!');
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
