<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

require_once 'AbstractBugSquasher.php';
require_once 'Book.php';
require_once 'Warhammer.php';

$book = new Book();
$warhammer = new Warhammer();

$book->append($warhammer);

$book->handle(2);
$book->handle(4);
$book->handle(8);
$book->handle(9);
