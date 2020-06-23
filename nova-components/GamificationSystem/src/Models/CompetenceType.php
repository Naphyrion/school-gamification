<?php

namespace Naphyrion\GamificationSystem\Models;

use Illuminate\Database\Eloquent\Model;

class CompetenceType extends Model
{
    //
    public function competence()
   {
       return $this->hasMany('Naphyrion\GamificationSystem\Models\Competence');
   } 
}
