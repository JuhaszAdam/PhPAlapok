<?php
echo PHP_EOL . " *** Minden eredmény igaz lesz." . PHP_EOL . PHP_EOL;
$a = true;
$b = 1;
$c = 1.0;

$a ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

!(!($a)) ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

($a == $b) ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

($a == $c) ? $result = "igaz" : $result = "hamis";
echo $result . PHP_EOL;

($b == $c) ? $result = "igaz" : $result = "hamis";
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

// AND vs &&
echo PHP_EOL;

var_dump(false && false || true);   // ( ( false && false ) || true ) = TRUE
var_dump(false AND false || true);  // ( false && ( false || true ) ) = FALSE

$a = false;
var_dump($a = true && true);   // (  $a = ( true  && true ) )
var_dump($a = true AND true);  // ( ( $a = true ) AND true )

// Bitwise operators
$a = 'abc';
$b = 'abc123';
echo PHP_EOL;
var_dump($a & $b);
var_dump($a | $b);
var_dump($a ^ $b);

$a = ~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-
~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~~-~-100;

echo "\$a is now $a. Happy Debugging!" . PHP_EOL;

// @ Operator
// "This operator is affectionately known by veteran phpers as the stfu operator"
// ...so what does the @ operator do? It temporarily sets the error reporting level to 0 for that line.
// If that line triggers an error, the error handler will still be called, but it will be called with an error level of 0

// (elnyomja az error message-eket)
@magic();
function magic(){
    new mákosguba;
}

// ` Operator
// Kosz a monitoron
// = exec();
echo 'Working Directory: ' . `pwd`;
