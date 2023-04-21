<?php

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactFormData;

    public function __construct($contactFormData)
    {
        $this->contactFormData = $contactFormData;
    }

    public function build()
    {
        return $this->view('emails.contact')
                    ->subject('New Contact Form Submission');
    }
}

