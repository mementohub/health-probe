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
        $this->app['router']->group([
            'middleware' => ['api'],
            'namespace' => 'iMemento\HealthProbe'
        ], function ($router) {
            $router->get('healthy', 'HealthController@check');
        });
    }
}
