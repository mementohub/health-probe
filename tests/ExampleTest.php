<?php

namespace iMemento\HealthProbe\Tests;

use iMemento\HealthProbe\ServiceProvider;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    public function test_it_can_access_the_route()
    {
        $response = $this->get('/healthy');
        $response->assertStatus(200);
        $this->assertTrue(data_get(json_decode($response->getContent()), 'status'));
    }
}
