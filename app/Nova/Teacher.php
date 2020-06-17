<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use Freshwork\RutField\RutField;
use Laravel\Nova\Http\Requests\NovaRequest;

class Teacher extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Teacher::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'names',
        'last_name_1',
        'last_name_2',
        'run',
        'email',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Names')
                ->rules('required', 'max:255'),

            Text::make('Last Name 1')
                ->rules('required', 'max:255'),

            Text::make('Last Name 2')
                ->rules('max:255'),

            RutField::make('run')
                ->rules('required','cl_rut')
                ->creationRules('unique:students')
                ->updateRules('unique:students,run,{{resourceId}}')
                ->hideFromIndex(),
            
            Text::make('Address')
                ->rules('max:255'),

            Text::make('Phone Number'),

            Text::make('Email')
                ->rules('email'),

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
        return [];
    }
}
