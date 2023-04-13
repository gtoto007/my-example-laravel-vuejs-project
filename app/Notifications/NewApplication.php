<?php

namespace App\Notifications;

use App\Models\Application;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class NewApplication extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(public User $user, public Application $application)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','slack'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("{$this->application->last_name} ha inviato una candidatura")
            ->greeting("Ciao {$this->user->name},")
            ->line("{$this->application->first_name} {$this->application->last_name} ha inviato la sua candidatura")
            ->action('Accedi alla dashboard', url('apply'))
            ->salutation('BitBoss');
    }

    /**
     * Get the Slack representation of the notification.
     */
    public function toSlack(object $notifiable): SlackMessage
    {
        return (new SlackMessage)
            ->content("{$this->application->first_name} {$this->application->last_name} ha inviato la sua candidatura")
            ->attachment(function ($attachment) {
                $attachment->title("Nuova candidatura")
                    ->fields([
                        'Nome' => $this->application->first_name,
                        'Cognome' => $this->application->last_name,
                        'Email' => $this->application->email,
                    ]);
            });
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
