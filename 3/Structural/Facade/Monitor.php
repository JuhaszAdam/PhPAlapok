<?php

namespace DesignPatterns\Structural\Facade;

class Monitor implements MonitorInterface
{
    public function crack()
    {
        echo "Monitor has cracked!" . PHP_EOL;
    }
}
