<?php

namespace App\Notifications;

use App\Models\Resume;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResumeReceivedNotification extends Notification
{
    use Queueable;

    protected $resume;

    public function __construct(Resume $resume)
    {
        $this->resume = $resume;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Novo Currículo Recebido')
            ->greeting('Olá RH,')
            ->line('Um novo currículo foi enviado para o sistema.')
            ->line('**Nome:** ' . $this->resume->name)
            ->line('**E-mail:** ' . $this->resume->email)
            ->line('**Telefone:** ' . $this->resume->phone)
            ->line('**Cargo Desejado:** ' . $this->resume->role)
            ->line('**Escolaridade:** ' . $this->resume->education)
            ->when($this->resume->observations, function ($mail) {
                $mail->line('**Observações:** ' . $this->resume->observations);
            })
            ->line('**Data/Hora do Envio:** ' . $this->resume->send_date)
            ->line('**IP:** ' . $this->resume->ip)
            ->action('Baixar Currículo', asset('storage/'.$this->resume->file))
            ->line('Obrigado por usar nosso sistema!');
    }
}
