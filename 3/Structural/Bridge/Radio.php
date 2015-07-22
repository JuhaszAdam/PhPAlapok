<?php

namespace DesignPatterns\Structural\Bridge;

class Radio implements SwitchableInterface
{

    public function turnOn()
    {
        echo 'Radio is now turned on!' . PHP_EOL;
    }

    public function turnOff()
    {
        echo 'Radio is now turned off!' . PHP_EOL;
    }
}
