<?php

namespace Naphyrion\GamificationSystem\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    

    public function players()
    {
        return $this->belongsToMany('Naphyrion\GamificationSystem\Models\Player')
                        ->using('Naphyrion\GamificationSystem\Models\AchievementPlayer')
                        ->withPivot('points_earned', 'unlocked_at')
                        ->withTimestamps();
    }

    public function tags()
    {
        return $this->morphToMany('Naphyrion\GamificationSystem\Models\Tag', 'taggable');
    }
}
