<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($senderEmail, $user, $message)
    {
        $this->senderEmail = $senderEmail;
        $this->user = $user;
        $this->message = $message;
    }


    public function build()
    {
        $message1= $this->message;

        return $this->from($this->senderEmail)
                ->subject('Thank you for contacting me')
                ->view('emails.contact',compact('message1'))
                ->with([
                    'user' => $this->user,
                    'message' => $this->message,

                ]);
    }
}


