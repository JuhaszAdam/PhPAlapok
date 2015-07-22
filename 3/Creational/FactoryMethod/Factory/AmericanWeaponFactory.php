<?php

namespace DesignPatterns\Creational\FactoryMethod;

class AmericanWeaponFactory extends AbstractWeaponFactoryMethod
{
    /**
     * @inheritdoc
     */
    public function createWeapon($type)
    {
        $weapon = new Weapon();
        $weapon->setFrame($type);
        $weapon->setName($type ? 'USP' : 'M4A1');

        return $weapon;
    }
}
