<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class AbstractWeaponFactoryMethod
{
    const RIFLE = 0;
    const SIDEARM = 1;

    /**
     * @param $type
     * @return Weapon
     */
    abstract public function createWeapon($type);
}
