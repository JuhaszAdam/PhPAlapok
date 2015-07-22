<?php

namespace DesignPatterns\Structural\Facade;

class Human implements HumanInterface
{
    /**
     * @param string $bodypart
     */
    public function takeDamage($bodypart)
    {
        echo "Human took damage to its " . $bodypart . "!" . PHP_EOL;
    }
}
