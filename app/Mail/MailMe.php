<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailMe extends Mailable
{
    use Queueable, SerializesModels;

    public $contactInformation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactInformation)
    {
        $this->contactInformation = $contactInformation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.mail-me');
    }
}
