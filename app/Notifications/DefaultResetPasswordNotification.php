<?php

namespace CodeFlix\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Bus\Queueable;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class DefaultResetPasswordNotification extends ResetPassword
{


    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(Lang::getFromJson('Redefinir Senha'))
            ->line(Lang::getFromJson('Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha para sua conta.'))
            ->action(Lang::getFromJson('Redefinir senha'), url(config('app.url').route('password.reset', $this->token, false)))
            ->line(Lang::getFromJson('Se você não solicitou uma redefinição de senha, nenhuma ação adicional é necessária.'));
    }


}
