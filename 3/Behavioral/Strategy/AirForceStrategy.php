<?php

namespace DesignPatterns\Behavioral\Strategy;

class AirForceStrategy implements StrategyInterface
{
    /**
     * @inheritdoc
     */
    public function conquer($enemy)
    {
        echo "Conquer your enemy '" . $enemy . "' using your superior Air Force!" . PHP_EOL;
    }
}
