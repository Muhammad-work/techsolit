<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CallbackMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // holds the form data

    public function __construct($data)
    {
        $this->data = $data;
    }
    public function build()
    {
        return $this->subject('New Callback Request')
            ->view('emails.callback');
    }
}
