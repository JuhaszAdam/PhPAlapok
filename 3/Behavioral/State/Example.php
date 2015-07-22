<?php

namespace DesignPatterns\Behavioral\State;

require_once 'AbstractIceCreamState.php';
require_once 'IceCream.php';
require_once 'FullStage.php';
require_once 'HalfStage.php';
require_once 'EmptyStage.php';

$icecream = new IceCream();
$icecream->lick();
$icecream->lick();
$icecream->lick();