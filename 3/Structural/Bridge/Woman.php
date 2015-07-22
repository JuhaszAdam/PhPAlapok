<?php

namespace DesignPatterns\Structural\Bridge;

class Woman implements SwitchableInterface
{

    public function turnOn()
    {
        echo 'Woman is now turned on!' . PHP_EOL;
    }

    public function turnOff()
    {
        echo 'Woman is now turned off! Shame.' . PHP_EOL;
    }
}
