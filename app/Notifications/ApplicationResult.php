<?php

namespace App\Notifications;

use App\Models\Application;
use App\Models\Status;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ApplicationResult extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public Application $application)
    {
        $this->afterCommit();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        if ($this->application->status == Status::Scartato) {
            return $this->applicationDiscarded();
        } else if ($this->application->status == Status::Accettato) {
            return $this->applicationAccepted();
        } else
            throw new \Exception("lo stato $this->application->status non è stato gestito");
    }

    private function applicationAccepted(): MailMessage
    {
        return (new MailMessage)
            ->subject("La tua candidatura è stata esaminata")
            ->greeting("Ciao {$this->application->first_name},")
            ->line('la tua candidatura è stata accettata! Complimenti :)')
            ->line('Ti contatteremo presto')
            ->salutation('BitBoss');

    }

    private function applicationDiscarded(): MailMessage
    {
        return (new MailMessage)
            ->subject("La tua candidatura è stata esaminata")
            ->greeting("Ciao {$this->application->first_name},")
            ->line('la tua candidatura purtroppo è stata rifiutata!')
            ->line('Grazie per il tempo che hai dedicato')
            ->salutation('BitBoss');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
