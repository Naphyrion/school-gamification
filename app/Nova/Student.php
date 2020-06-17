<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Freshwork\RutField\RutField;
use Laravel\Nova\Http\Requests\NovaRequest;
use Carbon\Carbon;

class Student extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Student::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'full_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'enrollment',
        'names',
        'last_name_1',
        'last_name_2',
        'run',
    ];
    
    /**
     * Build an "index" query for the given resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function indexQuery(NovaRequest $request, $query)
    {
        if($request->user()->hasRole('Super Admin')){

            return $query;

        }
        if(isset($request->user()->teacher)){
            
            $classroomsId = $request->user()->teacher->classrooms()->pluck('classroom_id');
            return $query->whereIn('classroom_id',$classroomsId);
        }
        
        return $query->where('id', $request->user()->student->id);
    
       
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            //ID::make()->sortable(),

            Number::make('Enrollment')
                ->creationRules('unique:students')
                ->updateRules('unique:students,enrollment,{{resourceId}}')
                ->hideWhenCreating(),

            BelongsTo::make('Classroom'),

            Number::make('List Number')
                ->hideWhenCreating()
                ->sortable(),

            RutField::make('run')
                ->rules('required','cl_rut')
                ->creationRules('unique:students')
                ->updateRules('unique:students,run,{{resourceId}}')
                ->hideFromIndex(),

            Text::make('names')
                ->rules('required'),

            Text::make('Last Name 1')
                ->rules('required')
                ->sortable(),

            Text::make('Last Name 2'),

            Select::make('Gender')
                ->options([
                    'F' => 'Femenino',
                    'M' => 'Masculino',
                ])
                ->rules('required'),

            Date::make('Birthday')
                ->rules('required'),

            Text::make('Email')
                    ->rules('email'),

            Text::make('Address')
                ->hideFromIndex(),

            Date::make('Enroll Date')
                ->rules('required')
                ->default(Carbon::now())
                ->hideFromIndex(),
            
            Date::make('Withdraw Date')
                ->hideWhenCreating()
                ->hideFromIndex(),
            
            Textarea::make('Withdrawal Reason')
                ->hideWhenCreating()
                ->hideFromIndex(),
            
            Boolean::make('enrolled')
                ->onlyOnIndex(),

            BelongsTo::make('User'),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            new Actions\EnrollmentNumber(),
        ];
    }
}
