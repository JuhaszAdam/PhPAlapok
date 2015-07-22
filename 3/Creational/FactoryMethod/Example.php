<?php

namespace DesignPatterns\Creational\FactoryMethod;

require_once 'Factory/AbstractWeaponFactoryMethod.php';
require_once 'Factory/AmericanWeaponFactory.php';
require_once 'Factory/RussianWeaponFactory.php';

require_once 'Weapon.php';

$americanWeaponFactory = new AmericanWeaponFactory();
$russianWeaponFactory = new RussianWeaponFactory();

$guns[] = $americanWeaponFactory->createWeapon(AbstractWeaponFactoryMethod::SIDEARM);
$guns[] = $americanWeaponFactory->createWeapon(AbstractWeaponFactoryMethod::RIFLE);
$guns[] = $russianWeaponFactory->createWeapon(AbstractWeaponFactoryMethod::SIDEARM);
$guns[] = $russianWeaponFactory->createWeapon(AbstractWeaponFactoryMethod::RIFLE);

foreach ($guns as $gun) {
    echo PHP_EOL . $gun;
}
