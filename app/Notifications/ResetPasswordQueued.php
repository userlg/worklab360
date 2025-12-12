<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordQueued extends Notification implements ShouldQueue
{
    use Queueable;

    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Restablecer contraseña')
            ->line('Recibiste este email porque se solicitó un reseteo de contraseña.')
            ->action('Reset Password', url("/reset-password/{$this->token}?email={$notifiable->email}"))
            ->line('Si no solicitaste esto, ignora el mensaje.');
    }
}
