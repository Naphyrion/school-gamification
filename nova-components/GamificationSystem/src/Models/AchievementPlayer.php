<?php

namespace Naphyrion\GamificationSystem\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AchievementPlayer extends Pivot
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'unlocked_at' => 'datetime',
    ];
}