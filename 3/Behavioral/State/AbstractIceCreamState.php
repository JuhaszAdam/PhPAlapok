<?php

namespace DesignPatterns\Behavioral\State;

abstract class AbstractIceCreamState
{
    /**
     * @var AbstractIceCreamState
     */
    protected $currentStage;

    abstract public function lick();
}
