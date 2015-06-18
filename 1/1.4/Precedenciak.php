<?php
echo PHP_EOL . " *** Minden érték 42 lesz, különböző precedenciákkal." . PHP_EOL . PHP_EOL;
echo 2 + 2 * 20 . PHP_EOL;
echo ((2 * 20) + 2) . PHP_EOL;
echo (2 * (20 + 1)) . PHP_EOL;
echo ($a = 2 + $a = 42 - $a = 2) . PHP_EOL;

$bar = true;
$str = "TEST". $bar ? 'true' : 'false' ."TEST";
echo PHP_EOL.$str;

$bar = true;
$str = "TEST". ($bar ? 'true' : 'false') ."TEST";
echo PHP_EOL.$str;

echo PHP_EOL;

$x = 4;
echo "x minus one equals " . $x-1 . ", or so I hope";
