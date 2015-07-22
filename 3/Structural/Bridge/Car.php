<?php

namespace DesignPatterns\Structural\Bridge;

class Car implements SwitchableInterface
{

    public function turnOn()
    {
        echo 'Car is now turned on!' . PHP_EOL;
    }

    public function turnOff()
    {
        echo 'Car is now turned off!' . PHP_EOL;
    }
}
