<?php

namespace DesignPatterns\Structural\Adapter;

require_once 'ColoringInterface.php';
require_once 'PaintableInterface.php';
require_once 'PaintableAdapter.php';
require_once 'House.php';
require_once 'DiscoLamp.php';

$objects[] = new DiscoLamp();
$objects[] = new PaintableAdapter(new House());

foreach ($objects as $object) {
    /** @var ColoringInterface $object */
    $object->setColor('blue');
}
