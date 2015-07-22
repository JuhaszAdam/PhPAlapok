<?php

namespace DesignPatterns\Structural\Adapter;

class PaintableAdapter implements ColoringInterface
{
    /**
     * @var PaintableInterface
     */
    private $paintable;

    public function __construct(PaintableInterface $paintable)
    {
        $this->paintable = $paintable;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->paintable->paint($color);
    }
}
