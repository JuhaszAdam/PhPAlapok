<?php

namespace DesignPatterns\Creational\ObjectPool;

require_once 'ObjectPool/PunchBowl.php';
require_once 'PunchCup.php';

$punchBowl = new PunchBowl(3);

$punchBowl->getPunchCup();
$punchBowl->getPunchCup();
$punchBowl->getPunchCup();
$punchBowl->getPunchCup();
$punchBowl->getPunchCup();
