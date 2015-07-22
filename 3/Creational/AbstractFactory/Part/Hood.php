<?php

namespace DesignPatterns\Creational\AbstractFactory;

class Hood
{
    /**
     * @var string
     */
    private $color;

    public function __construct($color = "White")
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
}
