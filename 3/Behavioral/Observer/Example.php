<?php

namespace DesignPatterns\Behavioral\Observer;

require_once'ObserverInterface.php';
require_once'Observer.php';
require_once'User.php';

$user = new User();
$user->addObserver(new Observer());
$user->setName('Bob');
$user->setEmail('Bob@Foo.com');
