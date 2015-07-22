<?php

namespace DesignPatterns\Behavioral\Strategy;

class General
{
    /**
     * @var StrategyInterface
     */
    private $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @param string $enemy
     */
    public function conquer($enemy)
    {
        $this->strategy->conquer($enemy);
    }
}
