<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PartnershipContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var string
     */
    public $fio;

    /**
     * @var string
     */
    public $company;

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $about_company;

    /**
     * Create a new message instance.
     *
     * @param  array  $args
     */
    public function __construct(array $args)
    {
        $this->company = $args['company'];
        $this->link = $args['link'];
        $this->email = $args['email'];
        $this->about_company = $args['about_company'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email, $this->fio)->view('mails.contact_forms.partnership');
    }
}
