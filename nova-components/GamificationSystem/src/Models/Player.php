<?php

namespace Naphyrion\GamificationSystem\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function student()
    {
        return $this->belongsTo('\App\Student');
    }

    public function competences()
    {
        return $this->belongsToMany('Naphyrion\GamificationSystem\Models\Competence');
    }
    public function achievements()
    {
        return $this->belongsToMany('Naphyrion\GamificationSystem\Models\Achievement')
                        ->using('Naphyrion\GamificationSystem\Models\AchievementPlayer')
                        ->withPivot('points_earned', 'unlocked_at')
                        ->withTimestamps();
    }

}
