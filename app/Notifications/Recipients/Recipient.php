<?php

namespace App\Notifications\Recipients;

use Illuminate\Notifications\Notifiable;

class Recipient
{
    use Notifiable;

    public $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function routeNotificationForMail($notification)
    {
        return $this->email;
    }
}