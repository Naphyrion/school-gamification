<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    public function classrooms()
    {
        return $this->belongsToMany('App\Classroom', 'classroom_subject_teacher')
            ->withPivot('teacher_id', 'head_teacher')
            ->withTimestamps();
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Teacher', 'classroom_subject_teacher')
            ->withPivot('classroom_id', 'head_teacher')
            ->withTimestamps();
    }

}
