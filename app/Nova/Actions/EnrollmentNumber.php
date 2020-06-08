<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use App\Student;

class EnrollmentNumber extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        $lastEnrollmentNumber = 0;
        
        if(Student::where('enrollment','>', 0)->exists()){
            $lastEnrollmentNumber = Student::where('enrollment','>', 0)
                                            ->orderBy('enrollment', 'desc')
                                            ->value('enrollment');
        }
        
        foreach($models as $student){

            if($student->enrollment <= 0){
                $student->update([
                    'enrollment' => ++$lastEnrollmentNumber,
                ]);
            }
        }
        
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
