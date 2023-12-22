<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CheckoutConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    

    public function __construct($carts)
    {
        $this->carts = $carts;
    }

     
    public function build()
    {
        /* return $this->subject('Order Confirmation')
                   ->view('emails.order_confirm_mail'); */
        return $this->subject('Order Confirmation')
                   ->view('emails.order_confirm_mail')
                   ->with('carts', $this->carts);;
         
    }
}
