<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractVehiclePartFactory
{
    /**
     * @return Door
     */
    abstract public function createDoor();

    /**
     * @return Hood
     */
    abstract public function createHood();

    /**
     * @return Wheel
     */
    abstract public function createWheel();
}
