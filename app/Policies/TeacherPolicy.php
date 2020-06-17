<?php

namespace App\Policies;

use App\Teacher;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeacherPolicy
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
        return $user->can('view any teacher');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Teacher  $teacher
     * @return mixed
     */
    public function view(User $user, Teacher $teacher)
    {
        //
        return $user->can('view teacher') || $user->teacher->id == $teacher->id;
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
        return $user->can('create teacher');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Teacher  $teacher
     * @return mixed
     */
    public function update(User $user, Teacher $teacher)
    {
        //
        return $user->can('update teacher') || $user->teacher->id == $teacher->id;;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Teacher  $teacher
     * @return mixed
     */
    public function delete(User $user, Teacher $teacher)
    {
        //
        return $user->can('delete teacher');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Teacher  $teacher
     * @return mixed
     */
    public function restore(User $user, Teacher $teacher)
    {
        //
        return $user->can('restore teacher');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Teacher  $teacher
     * @return mixed
     */
    public function forceDelete(User $user, Teacher $teacher)
    {
        //
        return $user->can('force delete teacher');
    }
}
