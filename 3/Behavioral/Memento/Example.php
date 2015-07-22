<?php

namespace DesignPatterns\Behavioral\Memento;

require_once 'Memento.php';
require_once 'ChocolateBar.php';

$snickers = new ChocolateBar();

$snickers->eat();
$memento = new Memento($snickers);
$snickers->eat();
$snickers->eat();
$snickers->eat();
$snickers = $memento->getState();
$snickers->eat();
$snickers->eat();
$snickers = $memento->getState();
$snickers->eat();
$snickers->eat();
