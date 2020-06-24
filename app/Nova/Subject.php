<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Http\Requests\NovaRequest;
use App\Teacher;

class Subject extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Subject::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'name',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        if(isset($this->pivot->teacher_id)) {
            return [
                ID::make()->sortable()
                    ->hideFromIndex(),

                Text::make('name'),

                Text::make('description'),

                Text::make('Teacher', function(){
                    return view('link.router', [
                                'name' => Teacher::find($this->pivot->teacher_id)->full_name,
                                'url' => url('nova/resources/teachers/'.$this->pivot->teacher_id),
                            ])->render();})
                        ->onlyOnIndex()
                        ->asHtml(),

                Boolean::make('Head Teacher', function(){
                    return $this->pivot->head_teacher;
                })->onlyOnIndex(),
            ];
        }
        return [
            ID::make()->sortable(),
            Text::make('name'),
            Text::make('description'),
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

    /**
     * Determine if this resource is available for navigation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    public static function availableForNavigation(Request $request)
    {
        if($request->user()->hasRole('Super Admin')){

            return true;

        }
        return false;
    }
}
