<?php

namespace DesignPatterns\Behavioral\State;

class FullStage extends AbstractIceCreamState
{
    public function lick()
    {
        echo "[FullStage] Executing Icecream Lick... Successful!" . PHP_EOL;

        return new HalfStage();
    }
}
