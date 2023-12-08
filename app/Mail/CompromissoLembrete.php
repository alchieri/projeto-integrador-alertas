<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CompromissoLembrete extends Mailable
{
    use Queueable, SerializesModels;
    public $assunto;
    public $mensagem;
    /**
     * Create a new message instance.
     */
    public function __construct($assunto, $mensagem)
    {
        $this->$assunto = $assunto;
        $this->$mensagem = $mensagem;
    }
    
    public function build(){

        return $this->subject('Envio de e-mail!')
        ->from('projetointegradorsenacriodosul@outlook.com');       
    }
}
