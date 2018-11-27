<?php

namespace Travozone\Slack\Providers;

use Illuminate\Support\ServiceProvider;

class SlackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Travozone\Slack\Slack');

        // publish file
        $this->publishes([
            __DIR__.'/path/to/config/slack.php' => config_path('slack.php'),
        ]);
    }
}
