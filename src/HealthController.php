<?php

namespace iMemento\HealthProbe;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class HealthController
{
    /**
     * Return view for index screen.
     *
     * @return Response
     */
    public function check()
    {
        return response(['status' => true], 200);
    }
}
