<?php

namespace DesignPatterns\Structural\Facade;

class Insect implements InsectInterface
{
    public function squash()
    {
        echo "Insect is squashed to a pulp." . PHP_EOL;
    }
}
