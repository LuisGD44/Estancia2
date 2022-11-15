<?php

namespace App\Mail;

use Comentario;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class correo extends Mailable
{
    use Queueable, SerializesModels;

    public $distressCall;

    public function __construct(Comentario $comentario)
    {
        $this->distressCall = $comentario;
    }

    
    public function build()
    {
        return $this->view('mail.correo');
    }
}
