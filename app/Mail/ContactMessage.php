<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    //public $tbname;
    public $tbemail;
    public $tbobjet;
    public $tbmessage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tbemail, $tbobjet, $tbmessage)
    {

        //$this->tbname = $tbname;
        $this->tbemail = $tbemail;
        $this->tbobjet = $tbobjet;
        $this->tbmessage = $tbmessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('monsite@chezmoi.com')->markdown('emails.ContactMessage');
    }
}
