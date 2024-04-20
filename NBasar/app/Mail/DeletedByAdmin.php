<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DeletedByAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
     
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Estate deleted by Admin',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'DeletedByAdmin',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
