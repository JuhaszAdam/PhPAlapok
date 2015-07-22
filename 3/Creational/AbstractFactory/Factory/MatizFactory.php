<?php

namespace DesignPatterns\Creational\AbstractFactory;

class MatizFactory extends AbstractVehiclePartFactory
{
    /**
     * @inheritdoc
     */
    public function createDoor()
    {
        return new Door(4);
    }

    /**
     * @inheritdoc
     */
    public function createHood()
    {
        return new Hood('Pink');
    }

    /**
     * @inheritdoc
     */
    public function createWheel()
    {
        return new Wheel("Pimpin'");
    }
}
