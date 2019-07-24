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
        return $this->from($this->contactInformation->email)
                ->subject('New contact from my website')
                ->markdown('emails.mail-me');
    }
}
