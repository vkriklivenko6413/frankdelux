<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CallBackMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    public $data;

    /**
     * @param array $data
     * @param $order
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return $this
     */
    public function build(): self
    {
        return $this->subject('СТЕЛАЖ Обратный звонок')->view('email.callback', ['data' => $this->data]);
    }
}
