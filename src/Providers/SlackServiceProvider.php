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
        $source = realpath($raw = __DIR__.'/../config/slack.php') ?: $raw;
        $this->publishes([$source => config_path('slack.php')]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Travozone\Slack\Slack');
    }
}
