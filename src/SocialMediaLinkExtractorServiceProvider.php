<?php

namespace allotmentandy\socialmedialinkextractor;

use Illuminate\Support\ServiceProvider;

class SocialMediaLinkExtractorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //

        // register our controller
        $this->app->make('allotmentandy\socialmedialinkextractor\SocialMediaLinkExtractorController');
    }
}
