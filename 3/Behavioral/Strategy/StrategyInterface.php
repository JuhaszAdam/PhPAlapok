<?php

namespace DesignPatterns\Behavioral\Strategy;

interface StrategyInterface
{
    /**
     * @param string $enemy
     */
    public function conquer($enemy);
}
