<?php

namespace Naphyrion\GamificationSystem;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Naphyrion\GamificationSystem\Models\CompetenceBoard;
use Naphyrion\GamificationSystem\Http\Middleware\Authorize;
use Naphyrion\GamificationSystem\Observers\CompetenceBoardObserver;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'gamification-system');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->app->booted(function () {
            $this->routes();
        });

        Nova::serving(function (ServingNova $event) {
            //
        });

        CompetenceBoard::observe(CompetenceBoardObserver::class);
    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes()
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        Route::middleware(['nova', Authorize::class])
                ->prefix('nova-vendor/gamification-system')
                ->group(__DIR__.'/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
