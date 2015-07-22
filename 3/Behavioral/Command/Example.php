<?php

namespace DesignPatterns\Behavioral\Command;

require_once 'CommandInterface.php';
require_once 'HelloCommand.php';
require_once 'Invoker.php';
require_once 'Receiver.php';

$invoker = new Invoker();
$receiver = new Receiver();

$invoker->setCommand(new HelloCommand($receiver));
$invoker->run();
