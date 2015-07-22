<?php

namespace DesignPatterns\Creational\AbstractFactory;

class BusFactory extends AbstractVehiclePartFactory
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
        return new Hood('Green');
    }

    /**
     * @inheritdoc
     */
    public function createWheel()
    {
        return new Wheel('6');
    }
}
