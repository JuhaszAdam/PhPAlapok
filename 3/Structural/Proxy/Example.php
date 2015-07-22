<?php

namespace DesignPatterns\Structural\Proxy;

require_once 'Cat.php';
require_once 'ProxyCat.php';

$cats[] = new ProxyCat("Whiskers");
$cats[] = new ProxyCat("Purrminator");
$cats[] = new ProxyCat("Meowington");

foreach ($cats as $cat) {
    /** @var Cat $cat */
    $cat->scratch();
}
