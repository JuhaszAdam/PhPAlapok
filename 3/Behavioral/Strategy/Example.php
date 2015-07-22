<?php

namespace DesignPatterns\Behavioral\Strategy;

require_once 'StrategyInterface.php';
require_once 'AirForceStrategy.php';
require_once 'InfantryStrategy.php';
require_once 'NavyStrategy.php';
require_once 'General.php';

$infantryGeneral = new General(new InfantryStrategy());
$navyGeneral = new General(new NavyStrategy());
$airforceGeneral = new General(new AirForceStrategy());

$infantryGeneral->conquer('Bob');
$navyGeneral->conquer('Bob');
$airforceGeneral->conquer('Bob');
