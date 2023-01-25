<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Factura extends Mailable
{
    use Queueable, SerializesModels;

    public $pedido;
    public $productosPedido;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $pedido, $productosPedido )
    {
        $this ->pedido = $pedido;
        $this ->productosPedido = $productosPedido;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.factura');
    }
}
