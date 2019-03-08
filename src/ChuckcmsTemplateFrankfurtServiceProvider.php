<?php

namespace Chuckbe\ChuckcmsTemplateFrankfurt;

use Chuckbe\ChuckcmsTemplateFrankfurt\Commands\PublishFrankfurt;

use Illuminate\Support\ServiceProvider;

class ChuckcmsTemplateFrankfurtServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishFrankfurt::class,
            ]);
        }
        
        //php artisan vendor:publish --tag=chuckcms-template-frankfurt-public --force
        $this->publishes([
            __DIR__.'/resources' => public_path('chuckbe/chuckcms-template-frankfurt'),
        ], 'chuckcms-template-frankfurt-public');

        // $this->publishes([
        //     __DIR__ . '/config/chuckcms-template-frankfurt.php' => config_path('chuckcms-template-frankfurt'),
        // ], 'chuckcms-template-frankfurt-config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'chuckcms-template-frankfurt');

        // $this->mergeConfigFrom(
        //     __DIR__ . '/config/chuckcms-template-frankfurt.php', 'chuckcms-template-frankfurt-config'
        // );
    }
}
