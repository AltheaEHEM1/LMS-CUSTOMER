<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;

    public $resetLink;

    /**
     * Create a new message instance.
     */
    public function __construct($resetLink)
    {
        $this->resetLink = $resetLink;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Password Reset Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $htmlContent = "
            <html>
            <head>
                <title>Password Reset</title>
            </head>
            <body>
                <h1>Password Reset Request</h1>
                <p>You are receiving this email because we received a password reset request for your account.</p>
                <p>Click the link below to reset your password:</p>
                <a href='{$this->resetLink}'>Reset Password</a>
                <p>If you did not request a password reset, no further action is required.</p>
                <p>Thank you!</p>
            </body>
            </html>
        ";

        return new Content(
            htmlString: $htmlContent,
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
