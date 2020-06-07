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

    public function getClassroomNameAttribute()
    {
        return $this->grade->name . ' ' . $this->name;
    }
}
