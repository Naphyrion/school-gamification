<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    public function grades()
    {
        return $this->hasMany('App\Grades');
    }
}
