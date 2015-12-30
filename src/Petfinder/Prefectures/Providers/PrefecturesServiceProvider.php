<?php

namespace Petfinder\Prefectures\Providers;

use Illuminate\Support\ServiceProvider;

class PrefecturesServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__.'/../../../../resources/views', 'prefectures');

        // Load translation
        $this->loadTranslationsFrom(__DIR__.'/../../../../resources/lang', 'prefectures');

        // Call pblish redources function
        $this->publishResources();

        include __DIR__ . '/../Http/routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind facade
        $this->app->bind('prefectures', function ($app) {
            return $this->app->make('Petfinder\Prefectures\Prefectures');
        });

        // Repository binds

        
//        // Bind Prefecture to repository
        $this->app->bind(
            'Petfinder\\Prefectures\\Interfaces\\PrefectureRepositoryInterface',
            'Petfinder\\Prefectures\\Repositories\\Eloquent\\PrefectureRepository'
        );

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('prefectures');
    }

    /**
     * Publish resources.
     *
     * @return  void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__.'/../../../../config/config.php'
                        => config_path('prefectures.php')], 'config');

        // Publish public view
        $this->publishes([__DIR__.'/../../../../resources/views/public'
                        => base_path('resources/views/vendor/prefectures/public')], 'view-public');

        // Publish admin view
        $this->publishes([__DIR__.'/../../../../resources/views/admin'
                        => base_path('resources/views/vendor/prefectures/admin')], 'view-admin');

        // Publish language files
        $this->publishes([__DIR__.'/../../../../resources/lang'
                        => base_path('resources/lang/vendor/courier')], 'lang');

        // Publish migrations
        $this->publishes([__DIR__.'/../../../../database/migrations/'
                        => base_path('database/migrations')], 'migrations');

        // Publish seeds
        $this->publishes([__DIR__.'/../../../../database/seeds/'
                        => base_path('database/seeds')], 'seeds');
    }


}
