<?php

namespace DesignPatterns\Creational\AbstractFactory;

require_once 'Factory/AbstractVehiclePartFactory.php';
require_once 'Factory/BusFactory.php';
require_once 'Factory/JeepFactory.php';
require_once 'Factory/MatizFactory.php';

require_once 'Part/Door.php';
require_once 'Part/Wheel.php';
require_once 'Part/Hood.php';

require_once 'Vehicle.php';

$busFactory = new BusFactory();
$jeepFactory = new JeepFactory();
$matizFactory = new MatizFactory();

$vehicles[] = new Vehicle(
    $busFactory->createWheel(),
    $busFactory->createDoor(),
    $busFactory->createHood(),
    'Green Bus'
);

$vehicles[] = new Vehicle(
    $jeepFactory->createWheel(),
    $jeepFactory->createDoor(),
    $jeepFactory->createHood(),
    'Black Jeep'
);

$vehicles[] = new Vehicle(
    $matizFactory->createWheel(),
    $matizFactory->createDoor(),
    $matizFactory->createHood(),
    'Pimp Matiz'
);

foreach ($vehicles as $vehicle) {
    echo $vehicle . PHP_EOL;
}
