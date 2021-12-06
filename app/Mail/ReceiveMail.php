<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReceiveMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $request;
    protected $email;
    protected $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->request['name'];
        $email = $this->request['email'];
        return $this->from($email, $name)->subject('Vous avez un nouveau message')
                                      ->markdown('emails.receive');
    }
}
