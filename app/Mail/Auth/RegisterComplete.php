<?php

namespace App\Mail\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterComplete extends Mailable
{
    use Queueable, SerializesModels;

    public $content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content)
    {
        $this->content = (object)$content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = '会員登録完了';
        // テンプレート
        $view = 'email.auth.complete';

        /* ---------------------------------------------------------
         以下共通
        --------------------------------------------------------- */
        $subject = sprintf('【%s】', config()->get('app.name')) . $subject;

        return $this
            ->from(config()->get('mail.from.address'), config()->get('mail.from.name'))
            ->subject($subject)
            ->view($view);
    }
}
