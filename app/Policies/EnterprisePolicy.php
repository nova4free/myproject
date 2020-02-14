<?php

namespace App\Policies;

use App\Enterprise;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EnterprisePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any enterprises.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the enterprise.
     *
     * @param  \App\User  $user
     * @param  \App\Enterprise  $enterprise
     * @return mixed
     */
    public function view(User $user, Enterprise $enterprise)
    {
        //
    }

    /**
     * Determine whether the user can create enterprises.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the enterprise.
     *
     * @param  \App\User  $user
     * @param  \App\Enterprise  $enterprise
     * @return mixed
     */
    public function update(User $user, Enterprise $enterprise)
    {
        //
    }

    /**
     * Determine whether the user can delete the enterprise.
     *
     * @param  \App\User  $user
     * @param  \App\Enterprise  $enterprise
     * @return mixed
     */
    public function delete(User $user, Enterprise $enterprise)
    {
        //
    }

    /**
     * Determine whether the user can restore the enterprise.
     *
     * @param  \App\User  $user
     * @param  \App\Enterprise  $enterprise
     * @return mixed
     */
    public function restore(User $user, Enterprise $enterprise)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the enterprise.
     *
     * @param  \App\User  $user
     * @param  \App\Enterprise  $enterprise
     * @return mixed
     */
    public function forceDelete(User $user, Enterprise $enterprise)
    {
        return $user->hasRole('super-admin');
    }
}
