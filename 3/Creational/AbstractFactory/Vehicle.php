<?php

namespace DesignPatterns\Creational\AbstractFactory;

class Vehicle
{
    /**
     * @var Wheel
     */
    private $wheels;

    /**
     * @var Door
     */
    private $doors;

    /**
     * @var Hood
     */
    private $hood;

    /**
     * @var string
     */
    private $type;

    public function __construct(Wheel $wheels, Door $doors, Hood $hood, $type)
    {
        $this->wheels = $wheels;
        $this->doors = $doors;
        $this->hood = $hood;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            'This vehicle is a %s, it has %s wheels, %d doors and a %s hood.',
            $this->type,
            $this->wheels->getType(),
            $this->doors->getCount(),
            $this->hood->getColor()
        );
    }
}
