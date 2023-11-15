<?php

namespace App\Http\Controllers;

use App\Models\Compromisso;
use Illuminate\Http\Request;
use DateTime;
use DateInterval;
use DateTimeZone;


class InicioController extends Controller
{
    public function inicio(){
        
        $timezone = new DateTimeZone('America/Sao_Paulo');
        $umDia = new DateInterval('P1D');

        $ontem = new DateTime('yesterday', $timezone);
        $ontem = $ontem->format('Y-m-d');
                
        $hoje = new DateTime('now', $timezone);
        
        $hojeStr = $hoje->format('Y-m-d');
        
        $amanha = $hoje->add($umDia);
        $amanha = $amanha->format('Y-m-d');

        $compromissoOntem = Compromisso::query()
            ->where('data_inicio', '=', $ontem)->get();

        $compromissoHoje = Compromisso::query()
            ->where('data_inicio', '=', $hojeStr)->get();

        $compromissoAmanha = Compromisso::query()
            ->where('data_inicio', '=', $amanha)->get();
        
        return view('inicio')
            ->with('compromissosOntem', $compromissoOntem)
            ->with('compromissosHoje', $compromissoHoje)
            ->with('compromissosAmanha', $compromissoAmanha);
    }
}
