<?php
echo " *** Néhány alap típus" . PHP_EOL;
$a = 1; // int
var_dump($a);
$a = 1.1; // double
var_dump($a);
$a = 'egy'; // string
var_dump($a);
$a = [1]; // iteratív tömb
var_dump($a);
$a = ["egy" => 1]; // asszociatív tömb
var_dump($a);
$a = true; // boolean
var_dump($a);
$a = new StdClass; // osztályobjektum
var_dump($a);
$a = null; // null
var_dump($a);

echo PHP_EOL;
$a = 'b';
$$a = 'I am b!';
echo $b;


echo PHP_EOL;
echo PHP_EOL;

$php = "a";
$in_ = "php";
$normal_ = "in_";
$completely_ = "normal_";
$is_ = "completely_";
$This_ = "is_";
$a = "This_";

echo $a.$$a.$$$a.$$$$a.$$$$$a.$$$$$$a;

echo PHP_EOL;
