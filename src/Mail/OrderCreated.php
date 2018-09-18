<?php

namespace Kwidoo\BoyarCaviar\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Kwidoo\BoyarCaviar\Models\Invoices;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;


    public $invoice;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invoice)
    {
        $this->invoice = Invoices::find($invoice->id);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@boyarcaviar.eu')->subject('Your invoice from Boyar Caviar')->view('boyarcaviar::email.invoice',['invoice' => $this->invoice]);
    }
}
