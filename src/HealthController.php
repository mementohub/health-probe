<?php

namespace iMemento\HealthProbe;

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
