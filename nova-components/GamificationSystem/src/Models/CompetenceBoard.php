<?php

namespace Naphyrion\GamificationSystem\Models;

use Illuminate\Database\Eloquent\Model;

class CompetenceBoard extends Model
{
    //
    public function player()
    {
        return $this->belongsTo('Naphyrion\GamificationSystem\Models\Player');
    }

    public function teacher()
    {
        return $this->belongsTo('\App\Teacher');
    }

    public function competence()
    {
        return $this->belongsTo('Naphyrion\GamificationSystem\Models\Competence');
    }

    public function getCompetencePointsAttribute()
    {
        return $this->competence->points;
    }
}
