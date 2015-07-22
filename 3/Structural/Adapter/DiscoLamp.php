<?php

namespace DesignPatterns\Structural\Adapter;

class DiscoLamp implements ColoringInterface
{
    /**
     * @param string $color
     */
    public function setColor($color)
    {
        echo sprintf('Lamp Color is now %s!%s', $color, PHP_EOL);
    }
}
