<?php

namespace App\Policies;

use App\Classroom;
use App\Subject;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClassroomPolicy
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
        return $user->can('view any classroom');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Classroom  $classroom
     * @return mixed
     */
    public function view(User $user, Classroom $classroom)
    {
        //
        foreach($user->teacher->classrooms as $teacherClassroom){
            
            return $teacherClassroom->id === $classroom->id;
        
        }
        return $user->can('view classroom');
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
        return $user->can('create classroom');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Classroom  $classroom
     * @return mixed
     */
    public function update(User $user, Classroom $classroom)
    {
        //
        return $user->can('update classroom');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Classroom  $classroom
     * @return mixed
     */
    public function delete(User $user, Classroom $classroom)
    {
        //
        return $user->can('delete classroom');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Classroom  $classroom
     * @return mixed
     */
    public function restore(User $user, Classroom $classroom)
    {
        //
        return $user->can('restore classroom');
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Classroom  $classroom
     * @return mixed
     */
    public function forceDelete(User $user, Classroom $classroom)
    {
        //
        return $user->can('force delete classroom');
    }

    /**
     * Determine whether the user can attach any subject to a classroom.
     *
     * @param  \App\User  $user
     * @param  \App\Classroom  $classroom
     * @return mixed
     */
    public function attachAnySubject(User $user, Classroom $classroom)
    {
        return $user->can('attach any subject');
    }

    /**
     * Determine whether the user can attach a subject to a classroom.
     *
     * @param  \App\User  $user
     * @param  \App\Classroom  $classroom
     * @param  \App\Subject  $subject
     * @return mixed
     */
    public function attachSubject(User $user, Classroom $classroom)
    {
        return $user->can('attach subject');
    }

    /**
     * Determine whether the user can attach a subject to a classroom.
     *
     * @param  \App\User  $user
     * @param  \App\Classroom  $classroom
     * @param  \App\Subject  $subject
     * @return mixed
     */
    public function detachSubject(User $user, Classroom $classroom, Subject $subject)
    {
        return $user->can('detach subject');
    }
}
