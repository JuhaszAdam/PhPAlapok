<?php

namespace DesignPatterns\Behavioral\Mediator;

require_once'Book.php';
require_once'BookDatabase.php';
require_once'BookMediator.php';
require_once'BookReader.php';
require_once'TextTranslator.php';

$mediator = new BookMediator(new BookDatabase(), new BookReader(), new TextTranslator());
$mediator->readABook(0);
