<?php

namespace DesignPatterns\Behavioral\Strategy;

class NavyStrategy implements StrategyInterface
{
    /**
     * @inheritdoc
     */
    public function conquer($enemy)
    {
        echo "Conquer your enemy '" . $enemy . "' using tactical bombardment from your navy!" . PHP_EOL;
    }
}
