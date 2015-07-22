<?php

namespace DesignPatterns\Creational\Prototype;

require_once 'Prototype/AbstractSpellPrototype.php';
require_once 'Prototype/ElementalSpellPrototype.php';
require_once 'Prototype/NatureSpellPrototype.php';
require_once 'Prototype/NecromancySpellPrototype.php';

$fireballPrototype = new ElementalSpellPrototype('Fireball');
$pyroblastPrototype = new ElementalSpellPrototype('Pyroblast');
$healingTouchPrototype = new NatureSpellPrototype('Healing Touch');
$raiseGhoulPrototype = new NecromancySpellPrototype('Raise Ghoul');

for ($i = 0; $i < 5; $i++) {
    $fireball = clone $fireballPrototype;
    $fireball->cast();
}

$pyroblast = clone $pyroblastPrototype;
$pyroblast->cast();

for ($i = 0; $i < 3; $i++) {
    $healingTouch = clone $healingTouchPrototype;
    $healingTouch->cast();
}

$raiseGhoul = clone $raiseGhoulPrototype;
$raiseGhoul->cast();
