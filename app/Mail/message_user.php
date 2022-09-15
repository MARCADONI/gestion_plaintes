<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class message_user extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $mdp;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $mdp)
    {
        $this->email = $email;
        $this->password = $mdp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.created');
    }
}
