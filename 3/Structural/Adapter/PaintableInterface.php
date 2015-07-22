<?php

namespace DesignPatterns\Structural\Adapter;

interface PaintableInterface
{
    /**
     * @param string $color
     */
    public function paint($color);
}
