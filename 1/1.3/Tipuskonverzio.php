<?php
echo PHP_EOL . " *** settype" . PHP_EOL . PHP_EOL;
$a = "1";
settype($a, 'integer');
var_dump($a);
settype($a, 'double');
var_dump($a);
settype($a, 'boolean');
var_dump($a);
settype($a, 'array');
var_dump($a);
settype($a, 'object');
var_dump($a);
settype($a, 'null');
var_dump($a);
echo PHP_EOL . " *** String mint tömb" . PHP_EOL . PHP_EOL;
$a = 'abcdefgh';
echo 'Az $a string harmadik karaktere: ' . $a[2] . PHP_EOL;
echo 'Az $a string összes karaktere egymás után ciklussal: ';
for ($i = 0; $i < strlen($a); $i++) {
    echo $a[$i];
}
echo PHP_EOL . " *** Típuskasztolás" . PHP_EOL . PHP_EOL;
$a = 1;
$b = (boolean)$a;
var_dump($b);
$a = 0;
$b = (boolean)$a;
var_dump($b);
