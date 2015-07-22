<?php

namespace DesignPatterns\Structural\Adapter;

class House implements PaintableInterface
{
    /**
     * @inheritdoc
     */
    public function paint($color)
    {
        echo sprintf('House Color is now %s!%s', $color, PHP_EOL);
    }
}
