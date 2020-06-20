<?php

namespace Naphyrion\GamificationSystem\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    //
    public function players()
    {
        return $this->belongsToMany('Naphyrion\GamificationSystem\Models\Player');
    }

    public function tags()
    {
        return $this->morphToMany('Naphyrion\GamificationSystem\Models\Tag', 'taggable');
    }
}
