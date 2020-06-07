<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $casts = [
        'birthday'      => 'date',
        'enroll_date'   => 'date',
    ];
    //
    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }
}
