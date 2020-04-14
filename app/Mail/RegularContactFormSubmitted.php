<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegularContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var string
     */
    public $fio;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $content;

    /**
     * Create a new message instance.
     *
     * @param  array  $args
     */
    public function __construct(array $args)
    {
        $this->fio = $args['fio'];
        $this->email = $args['email'];
        $this->content = $args['message'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email, $this->fio)->view('mails.contact_forms.regular');
    }
}
