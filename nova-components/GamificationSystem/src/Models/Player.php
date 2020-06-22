<?php

namespace Naphyrion\GamificationSystem\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'points', 
    ];

    public function student()
    {
        return $this->belongsTo('\App\Student');
    }

    public function achievements()
    {
        return $this->belongsToMany('Naphyrion\GamificationSystem\Models\Achievement')
                        ->using('Naphyrion\GamificationSystem\Models\AchievementPlayer')
                        ->withPivot('points_earned', 'unlocked_at')
                        ->withTimestamps();
    }

    public function competenceBoards()
    {
        return $this->hasMany('Naphyrion\GamificationSystem\Models\CompetenceBoard');
    }

    public function getStudentNameAttribute()
    {
        return $this->student->full_name;
    }
}
