<?php

namespace Naphyrion\GamificationSystem;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class GamificationSystem extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('gamification-system', __DIR__.'/../dist/js/tool.js');
        Nova::style('gamification-system', __DIR__.'/../dist/css/tool.css');

        Nova::resources([
            \Naphyrion\GamificationSystem\Nova\Player::class,
            \Naphyrion\GamificationSystem\Nova\Competence::class,
            \Naphyrion\GamificationSystem\Nova\Achievement::class,
            \Naphyrion\GamificationSystem\Nova\Tag::class,
        ]);
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('gamification-system::navigation');
    }
}
