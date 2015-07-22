<?php

namespace DesignPatterns\Behavioral\State;

class HalfStage extends AbstractIceCreamState
{
    public function __construct()
    {
        $this->nextStage = new EmptyStage();
    }

    public function lick()
    {
        echo "[HalfStage] Executing Icecream Lick... Successful!" . PHP_EOL;

        return new EmptyStage();
    }
}
