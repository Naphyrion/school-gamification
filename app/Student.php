<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'enrollment', 
        'list_number',
    ];

    protected $casts = [
        'birthday'      => 'date',
        'enroll_date'   => 'date',
    ];
    //
    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }
    
    public function getFullNameAttribute()
    {
        return $this->names . ' ' . $this->last_name_1 . ' ' . $this->last_name_2;
    }

    public function getEnrolledAttribute()
    {
        return $this->withdraw_date == '';
    }
        
}
