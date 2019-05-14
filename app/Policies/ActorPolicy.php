<?php

namespace App\Policies;

use App\User;
use App\Actor;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActorPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the actor.
     *
     * @param  \App\User  $user
     * @param  \App\Actor  $actor
     * @return mixed
     */
    public function view(User $user, Actor $actor)
    {
        return true;
    }

    /**
     * Determine whether the user can create actors.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        // Bara tillåtet för admin att skapa Actors.
        return $user->isAdmin == 1;

    }

    /**
     * Determine whether the user can update the actor.
     *
     * @param  \App\User  $user
     * @param  \App\Actor  $actor
     * @return mixed
     */
    public function update(User $user, Actor $actor)
    {
      // Bara tillåtet för admin att skapa Actors.
      return true;
    }

    /**
     * Determine whether the user can delete the actor.
     *
     * @param  \App\User  $user
     * @param  \App\Actor  $actor
     * @return mixed
     */
    public function delete(User $user, Actor $actor)
    {
        //
    }

    /**
     * Determine whether the user can restore the actor.
     *
     * @param  \App\User  $user
     * @param  \App\Actor  $actor
     * @return mixed
     */
    public function restore(User $user, Actor $actor)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the actor.
     *
     * @param  \App\User  $user
     * @param  \App\Actor  $actor
     * @return mixed
     */
    public function forceDelete(User $user, Actor $actor)
    {
        //
    }
}
