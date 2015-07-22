<?php

namespace DesignPatterns\Behavioral\Iterator;

require_once 'Person.php';
require_once 'PersonIterator.php';

$personIterator = new PersonIterator(new Person("Bob", "bob@foomail.com", "foo bar", "male"));

for ($i = 0; $i < 4; $i++) {
    echo $personIterator->get($i) . PHP_EOL;
}
