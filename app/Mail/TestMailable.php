<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestMailable extends Mailable
{
    use Queueable, SerializesModels;

    private $product;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        //
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = "Mazhar Hossain";
        $email = "mazhar.nsu@gmail.com";
        $subject = "Insurance Information";
        $this->view('email.emailbody')->with('product', $this->product)
            ->from($email, $name)->subject($subject);

    }
}
