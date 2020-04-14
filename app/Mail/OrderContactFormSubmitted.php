<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var string
     */
    public $fio;

    /**
     * @var string
     */
    public $birthday;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @var string
     */
    public $languages;

    /**
     * Create a new message instance.
     *
     * @param  array  $args
     */
    public function __construct(array $args)
    {
        $this->fio = $args['fio'];
        $this->birthday = $args['birthday'];
        $this->email = $args['email'];
        $this->nationality = $args['nationality'];
        $this->languages = $args['languages'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email, $this->fio)->view('mails.contact_forms.order');
    }
}
