<?php

namespace DesignPatterns\Behavioral\Memento;

class ChocolateBar
{
    private $chocolateBites = 3;

    /**
     * @return int
     */
    public function eat()
    {
        if ($this->chocolateBites > 0) {
            echo "Eating Chocolate..." . PHP_EOL;
            $this->chocolateBites--;
        } else {
            echo "Out of Chocolate!!!" . PHP_EOL;
        }
    }
}
