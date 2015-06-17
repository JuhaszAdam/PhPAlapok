<?php
echo PHP_EOL . " *** Minden eredmény igaz lesz." . PHP_EOL . PHP_EOL;
$a = true;
$b = 1;
$c = 1.1;

$a ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

!(!($a)) ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

($a == $b) ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

($a == $c) ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

!($b == $c) ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

!($a === $b) ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

!($a === $c) ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

!($b === $c) ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

($b === $c) && ($a) && ($a > $b) && ($a == 42 && $b === "Banana") || true/*hehe*/ ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

!($a) ? $result = "igaz" : $result = "hamis" ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

echo PHP_EOL . " *** Érték növelése operátorral" . PHP_EOL . PHP_EOL;

$a = 0;

var_dump($a);    // alap érték
var_dump($a++);  // var_dump UTÁN értékelődik ki
var_dump(++$a);  // var_dump ELŐTT értékelődik ki
var_dump($a = 3);  // var_dump ELŐTT értékelődik ki
var_dump($a += 1); // var_dump ELŐTT értékelődik ki
