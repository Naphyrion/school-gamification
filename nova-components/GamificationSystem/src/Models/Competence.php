<?php

namespace Naphyrion\GamificationSystem\Models;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    //

    public function tags()
    {
        return $this->morphToMany('Naphyrion\GamificationSystem\Models\Tag', 'taggable');
    }
}
