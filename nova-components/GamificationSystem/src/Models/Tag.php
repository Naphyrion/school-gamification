<?php

namespace Naphyrion\GamificationSystem\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function achievements()
    {
        return $this->morphedByMany('Naphyrion\GamificationSystem\Models\achievement', 'taggable');
    }

    /**
     * Get all of the videos that are assigned this tag.
     */
    public function competences()
    {
        return $this->morphedByMany('Naphyrion\GamificationSystem\Models\Competence', 'taggable');
    }
}
