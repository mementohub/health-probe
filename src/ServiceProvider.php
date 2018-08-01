<?php

namespace iMemento\HealthProbe;

use Illuminate\Support\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app['router']->group([], function ($router) {
            $router->get('healthy', 'HealthController@check');
        });
    }
}
