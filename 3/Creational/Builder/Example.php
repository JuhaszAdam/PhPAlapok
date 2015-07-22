<?php

namespace DesignPatterns\Creational\Builder;

require_once 'Builder/BuilderInterface.php';
require_once 'Builder/FireDepartmentBuilder.php';
require_once 'Builder/HouseBuilder.php';
require_once 'Builder/SkyscraperBuilder.php';

require_once 'Building.php';

$builders[] = new HouseBuilder();
$builders[] = new SkyscraperBuilder();
$builders[] = new FireDepartmentBuilder();

$buildings = [];

foreach ($builders as $builder) {
    /** @var BuilderInterface $builder */
    $builder->buildFrame();
    $builder->buildWalls();
    $builder->addDoors();
    $builder->addWindows();
    $builder->paint();
    $buildings[] = $builder->getBuilding();
}

foreach ($buildings as $building) {
    echo PHP_EOL . $building;
}
