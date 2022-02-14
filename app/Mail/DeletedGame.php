<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DeletedGame extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $videogame;

    public function __construct($videogame) {
        $this -> videogame = $videogame;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this -> from('no-reply@mywebsite.site')
                    -> view('mail.deletedMail');
    }
}
