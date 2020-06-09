<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function school()
    {
        return  $this->belongsTo('App\School');
    }

    public function classrooms()
    {
        return $this->belongsToMany('App\Classroom', 'classroom_subject_teacher')
            ->withPivot('subject_id', 'head_teacher')
            ->withTimestamps();
    }

    public function subjects()
    {
        return $this->belongsToMany('App\Subject', 'classroom_subject_teacher')
            ->withPivot('classroom_id', 'head_teacher')
            ->withTimestamps();
    }

    public function getTeacherNameAttribute()
    {
        return $this->names . ' ' . $this->last_name_1 . ' ' . $this->last_name_2;
    }
}
