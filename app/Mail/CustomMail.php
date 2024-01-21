<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomMail extends Mailable
{
    use Queueable, SerializesModels;
    public string $logoHoreOdkaz;
    public string $logoHorePic;
    public string $nadpis;
    public string $text1;
    public string $text2;
    public string $text3;
    public string $footerLavo1;
    public string $footerLavo2;
    public string $footerLavo3;
    public string $footerLavo4;
    public string $footerPravo1;
    public string $footerPravo2Odkaz;
    public string $footerPravo2Text;
    /**
     * Create a new message instance.
     */
    public function __construct(
        string $logoHoreOdkaz,
        string $logoHorePic,
        string $nadpis,
        string $text1,
        string $text2,
        string $text3,
        string $footerLavo1,
        string $footerLavo2,
        string $footerLavo3,
        string $footerLavo4,
        string $footerPravo1,
        string $footerPravo2Odkaz,
        string $footerPravo2Text
    ) {
        $this->logoHoreOdkaz = $logoHoreOdkaz;
        $this->logoHorePic = $logoHorePic;
        $this->nadpis = $nadpis;
        $this->text1 = $text1;
        $this->text2 = $text2;
        $this->text3 = $text3;
        $this->footerLavo1 = $footerLavo1;
        $this->footerLavo2 = $footerLavo2;
        $this->footerLavo3 = $footerLavo3;
        $this->footerLavo4 = $footerLavo4;
        $this->footerPravo1 = $footerPravo1;
        $this->footerPravo2Odkaz = $footerPravo2Odkaz;
        $this->footerPravo2Text = $footerPravo2Text;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Custom Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {

        return new Content(
            view: 'mail.welcomeEmail',
            with: [
                'logoHoreOdkaz' => $this->logoHoreOdkaz,
                'logoHorePic' => $this->logoHorePic,
                'nadpis' => $this->nadpis,
                'text1' => $this->text1,
                'text2' => $this->text2,
                'text3' => $this->text3,
                'footerLavo1' => $this->footerLavo1,
                'footerLavo2' => $this->footerLavo2,
                'footerLavo3' => $this->footerLavo3,
                'footerLavo4' => $this->footerLavo4,
                'footerPravo1' => $this->footerPravo1,
                'footerPravo2Odkaz' => $this->footerPravo2Odkaz,
                'footerPravo2Text' => $this->footerPravo2Text,
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
