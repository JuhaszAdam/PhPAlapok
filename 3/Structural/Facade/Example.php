<?php

namespace DesignPatterns\Structural\Facade;

require_once 'Facade.php';
require_once 'HumanInterface.php';
require_once 'InsectInterface.php';
require_once 'MonitorInterface.php';
require_once 'Human.php';
require_once 'Insect.php';
require_once 'Monitor.php';

$facade = new Facade(new Human(), new Insect(), new Monitor());
$facade->kickInTheFace();
