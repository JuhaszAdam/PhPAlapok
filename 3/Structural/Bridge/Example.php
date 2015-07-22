<?php

namespace DesignPatterns\Structural\Bridge;

require_once 'SwitchableInterface.php';
require_once 'Car.php';
require_once 'Radio.php';
require_once 'Woman.php';

$objects[] = new Car();
$objects[] = new Radio();
$objects[] = new Woman();

foreach ($objects as $object) {
    /** @var SwitchableInterface $object */
    $object->turnOn();
    $object->turnOff();
}
