<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewContactLeadNotification extends Mailable
{
    use Queueable, SerializesModels;

    public array $lead;

    /**
     * Create a new message instance.
     */
    public function __construct(array $lead)
    {
        $this->lead = $lead;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $customerName = $this->lead['name'] ?? 'Website Visitor';
        $service = $this->lead['service'] ?? $this->lead['subject'] ?? 'Service Inquiry';
        $customerEmail = $this->lead['email'] ?? null;

        $envelope = new Envelope(
            subject: "New Lead from {$customerName} — Clean Matrix ({$service})",
        );

        if ($customerEmail && filter_var($customerEmail, FILTER_VALIDATE_EMAIL)) {
            $envelope->replyTo = [
                new Address($customerEmail, $customerName)
            ];
        }

        return $envelope;
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.new-lead',
            with: [
                'lead' => $this->lead,
            ],
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
