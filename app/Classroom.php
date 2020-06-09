<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    public function grade()
    {
        return $this->belongsTo('App\Grade');
    }

    public function students()
    {
        return $this->hasMany('App\Student');
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject', 'classroom_subject_teacher')
            ->withPivot('teacher_id', 'head_teacher')
            ->withTimestamps();
    }

    public function teachers()
    {
        return $this->belongsToMany('App\Teacher', 'classroom_subject_teacher')
            ->withPivot('subject_id', 'head_teacher')
            ->withTimestamps();
    }

    public function getClassroomNameAttribute()
    {
        return $this->grade->name . ' ' . $this->name;
    }
}
