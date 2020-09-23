<?php

namespace iMemento\HealthProbe;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app['router']->group([], function ($router) {
            $router->get('healthy', [HealthController::class, 'check']);
        });
    }
}
