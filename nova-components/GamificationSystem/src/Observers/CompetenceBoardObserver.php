<?php

namespace Naphyrion\GamificationSystem\Observers;

use Carbon\Carbon;
use Naphyrion\GamificationSystem\Models\CompetenceBoard;

class CompetenceBoardObserver
{
    /**
     * Handle the competence board "created" event.
     *
     * @param  \App\CompetenceBoard  $competenceBoard
     * @return void
     */
    public function created(CompetenceBoard $competenceBoard)
    {
        //
        $this->updatePlayerPoints($competenceBoard, 'add');
        $this->updatePlayerAchievements($competenceBoard, 'attach');
        $this->unlockAchievement($competenceBoard);
    }

    /**
     * Handle the competence board "updated" event.
     *
     * @param  \App\CompetenceBoard  $competenceBoard
     * @return void
     */
    public function updated(CompetenceBoard $competenceBoard)
    {
        //
    }

    /**
     * Handle the competence board "deleted" event.
     *
     * @param  \App\CompetenceBoard  $competenceBoard
     * @return void
     */
    public function deleted(CompetenceBoard $competenceBoard)
    {
        //
        $this->updatePlayerPoints($competenceBoard, 'rest');
        $this->updatePlayerAchievements($competenceBoard, 'detach');
    }

    /**
     * Handle the competence board "restored" event.
     *
     * @param  \App\CompetenceBoard  $competenceBoard
     * @return void
     */
    public function restored(CompetenceBoard $competenceBoard)
    {
        //
    }

    /**
     * Handle the competence board "force deleted" event.
     *
     * @param  \App\CompetenceBoard  $competenceBoard
     * @return void
     */
    public function forceDeleted(CompetenceBoard $competenceBoard)
    {
        //
    }

    private function updatePlayerPoints(CompetenceBoard $competenceBoard, String $method)
    {
        if($method === 'add'){

            $competenceBoard->player
                ->update([
                    'points' => $competenceBoard->player->points + $competenceBoard->competence->points
                ]);

        }

       if($method === 'rest'){

            $competenceBoard->player
                ->update([
                    'points' => $competenceBoard->player->points - $competenceBoard->competence->points
                ]);
       }
    }
    private function updatePlayerAchievements(CompetenceBoard $competenceBoard, String $method)
    {
        if($method === 'attach'){
            $competenceTags = $competenceBoard->competence->tags;
            $player = $competenceBoard->player;
            
            foreach($competenceTags as $tag){

                foreach($tag->achievements as $achievement){
                    if($player->achievements->contains($achievement)){
                            $player->achievements()
                                    ->updateExistingPivot($achievement, ['points_earned' => $player->achievements->find($achievement->id)->pivot->points_earned + $competenceBoard->competence->points]);
                    }else{
                        $player->achievements()
                                ->attach($achievement, ['points_earned' => $competenceBoard->competence->points]);
                    }
                }
            }
        }
        if($method === 'detach'){
            $competenceTags = $competenceBoard->competence->tags;
            $player = $competenceBoard->player;
            
            foreach($competenceTags as $tag){

                foreach($tag->achievements as $achievement){
                   
                    if($player->achievements->find($achievement->id)->pivot->points_earned - $competenceBoard->competence->points == 0){
                        $player->achievements()
                            ->detach($achievement);
                    }else{
                        $player->achievements()
                                ->updateExistingPivot($achievement, ['points_earned' => $player->achievements->find($achievement->id)->pivot->points_earned - $competenceBoard->competence->points]);
                    }  
                }
            }
        }     
    } 
    
    public function unlockAchievement(CompetenceBoard $competenceBoard){

        $player = $competenceBoard->player->fresh('achievements');
        $achievements = $player->achievements;

        foreach($achievements as $achievement){

            if($achievement->pivot->points_earned >= $achievement->points_to_unlock){
                $player->achievements()->updateExistingPivot($achievement, ['unlocked_at' => Carbon::now()]);
            }
        }
    }
}
