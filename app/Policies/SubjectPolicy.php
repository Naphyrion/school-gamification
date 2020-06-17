<?php

namespace App\Policies;

use App\Subject;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubjectPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
        return $user->can('view any subject');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Subject  $subject
     * @return mixed
     */
    public function view(User $user, Subject $subject)
    {
        //
        return $user->can('view subject');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->can('create subject');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Subject  $subject
     * @return mixed
     */
    public function update(User $user, Subject $subject)
    {
        //
        return $user->can('update subject');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Subject  $subject
     * @return mixed
     */
    public function delete(User $user, Subject $subject)
    {
        //
        return $user->can('delete subject');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Subject  $subject
     * @return mixed
     */
    public function restore(User $user, Subject $subject)
    {
        //
        return $user->can('restore subject');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Subject  $subject
     * @return mixed
     */
    public function forceDelete(User $user, Subject $subject)
    {
        //
        return $user->can('force delete subject');
    }

}
