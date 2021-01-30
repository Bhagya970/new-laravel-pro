<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendingEmail extends Mailable
{
    use Queueable, SerializesModels;

/**
* Create a new message instance.
*
* @return void
*/

    public $emails;
    // protected $data;


    public function __construct($emails)
    {
        $this->emails = $emails;
        // $this->data = $data;

    }

/**
* Build the message.s
*
* @return $this
*/
    public function build()
    {
        return $this->subject('Message from Laravel')
                    ->view('email_template')
                    ->with('emails', $this->emails);
                    // ->attach($this->data['document']->getRealPath(),
                    // [
                    //     'as' => $this->data['document']->getClientOriginalName(),
                    //     'mime' => $this->data['document']->getClientMimeType(),
                    // ]);
}
}