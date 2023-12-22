<?php

namespace App\Listeners;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Registered;

class SetDefaultImage
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
        if (empty($user->image)) {
            // Définir l'image par défaut
            $user->image = 'users/user.png'; // Remplacez cela par le chemin de votre image par défaut
            $user->save();
        }
    }
}
