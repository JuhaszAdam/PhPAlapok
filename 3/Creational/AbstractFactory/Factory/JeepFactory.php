<?php

namespace DesignPatterns\Creational\AbstractFactory;

class JeepFactory extends AbstractVehiclePartFactory
{
    /**
     * @inheritdoc
     */
    public function createDoor()
    {
        return new Door(6);
    }

    /**
     * @inheritdoc
     */
    public function createHood()
    {
        return new Hood('Black');
    }

    /**
     * @inheritdoc
     */
    public function createWheel()
    {
        return new Wheel('Offroad');
    }
}
