<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Compromisso;
use App\Mail\CompromissoLembrete;
use Illuminate\Support\Facades\Mail;

class EnviarEmailCompromisso implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Execute the job.
     */
    public function handle(): void {
        // Lógica para buscar os compromissos diários e enviar e-mail
        $compromissosDiarios = Compromisso::where('data_inicio', now()->toDateString())->get();

        if ($compromissosDiarios->isNotEmpty()) {
            $para = 'ivanfarias27@hotmail.com';
            $assunto = 'Lembrete de Compromissos Diários';
            $mensagem = 'Lista de compromissos para hoje:' . PHP_EOL;

            foreach ($compromissosDiarios as $compromisso) {
                $mensagem .= '- ' . $compromisso->descricao . ' às ' . $compromisso->hora . PHP_EOL;
            }

            Mail::to($para)->send(new CompromissoLembrete($assunto, $mensagem));
        } else {
            $para = 'ivanfarias27@hotmail.com';
            $assunto = 'Lembrete de Compromissos Diários';
            $mensagem = 'Sem compromissos hoje';
            Mail::to($para)->send(new CompromissoLembrete($assunto, $mensagem));
        }

    }
}