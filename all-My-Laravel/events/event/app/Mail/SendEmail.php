<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $html;
    public function __construct($html)
    {
        //
        $this->html=$html;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_subject="Confirm Wedding Planning";
        $e_message=$this->html;

        return $this->view('sendemail',compact("e_message"))->subject("e_subject");
    }
}
