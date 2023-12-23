<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Place;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlacePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the place.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Place  $place
     * @return mixed
     */
    public function update(User $user, Place $place)
    {
        // You can customize this logic based on your application's requirements
        return $user->id === $place->user_id;
    }
    public function delete(User $user, Place $place)
    {
        return $user->id === $place->user_id;
    }
}
