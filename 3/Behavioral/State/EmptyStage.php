<?php

namespace DesignPatterns\Behavioral\State;

class EmptyStage extends AbstractIceCreamState
{
    public function lick()
    {
        echo "[EmptyStage] Executing Icecream Lick... Successful! Icecream terminated!" . PHP_EOL;

        return null;
    }
}
