<?php

namespace DesignPatterns\Creational\FactoryMethod;

class RussianWeaponFactory extends AbstractWeaponFactoryMethod
{
    /**
     * @inheritdoc
     */
    public function createWeapon($type)
    {
        $weapon = new Weapon();
        $weapon->setFrame($type);
        $weapon->setName($type ? 'KS-23' : 'AK-47');

        return $weapon;
    }
}
