<?php

namespace App\Policies;

use App\School;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SchoolPolicy
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
        return $user->can('view any school');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\School  $school
     * @return mixed
     */
    public function view(User $user, School $school)
    {
        //
        return $user->can('view school');
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
       if(School::where('id', '>', 0)->count() <= 0){

           return $user->can('create school');
           
       }
       return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\School  $school
     * @return mixed
     */
    public function update(User $user, School $school)
    {
        //
        return $user->can('update school');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\School  $school
     * @return mixed
     */
    public function delete(User $user, School $school)
    {
        //
        return $user->can('delete school');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\School  $school
     * @return mixed
     */
    public function restore(User $user, School $school)
    {
        //
        return $user->can('restore school');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\School  $school
     * @return mixed
     */
    public function forceDelete(User $user, School $school)
    {
        //
        return $user->can('force delete school');
    }
}
