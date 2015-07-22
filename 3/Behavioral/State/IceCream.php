<?php

namespace DesignPatterns\Behavioral\State;

class IceCream extends AbstractIceCreamState
{
    public function __construct()
    {
        $this->currentStage = new FullStage();
    }

    public function lick()
    {
        $this->currentStage = $this->currentStage->lick();
    }
}
