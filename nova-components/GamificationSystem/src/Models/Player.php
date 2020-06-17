<?php

namespace Naphyrion\GamificationSystem\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    public function student()
    {
        return $this->belongsTo('\App\Student');
    }

}
