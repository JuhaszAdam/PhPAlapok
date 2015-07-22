<?php

namespace DesignPatterns\Creational\AbstractFactory;

class Wheel
{
    /**
     * @var string
     */
    private $type;

    public function __construct($type = "City")
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
