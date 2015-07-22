<?php

namespace DesignPatterns\Behavioral\Strategy;

class InfantryStrategy implements StrategyInterface
{
    /**
     * @inheritdoc
     */
    public function conquer($enemy)
    {
        echo "Conquer your enemy '" . $enemy . "' using mass Infantry invasion!" . PHP_EOL;
    }
}
