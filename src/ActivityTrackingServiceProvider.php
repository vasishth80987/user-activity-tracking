<?php

namespace Vsynch\ActivityTracking;

use Illuminate\Support\ServiceProvider;

class ActivityTrackingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //include __DIR__.'/Routes.php';
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../database/2018_11_28_011756_create_track_activity_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_track_activity_table.php')
            ], 'migrations');
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
        //$this->app->make('Vsynch\UserActivity\UserActivityController');
        //$this->loadViewsFrom(__DIR__.'/views', 'UserActivity');
    }
}
