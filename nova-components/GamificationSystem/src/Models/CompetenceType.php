<?php

namespace Naphyrion\GamificationSystem\Models;

use Illuminate\Database\Eloquent\Model;

class CompetenceType extends Model
{
    //
    public function competences()
   {
       return $this->hasMany('Naphyrion\GamificationSystem\Models\Competence');
   } 
}
