<?php

namespace App\Listeners;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Registered;
use App\Events\SetDefaultImage;

class SetDefaultImageListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */

    public function handle(Registered $event)
    {
        $user = $event->user;

        // Vérifiez si l'image de l'utilisateur est vide
        if (empty($event->user->image)) {
            // Définir l'image par défaut
            $user->image = ($event->user->gender === 'male') ? 'users/man.jpg' : 'users/women.jpg';
            $user->save();
        }
    }

}
