<?php

$a = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
kiir($a);
array_push($a, 11);
kiir($a);
foreach (array_chunk($a, 2) as $chunk) {
    kiir($chunk);
}

$keys = ["egy", "ketto", "harom"];
$values = [1, 2, 3];
var_dump(array_combine($keys, $values));

$b =
    [
        ["a", "b", "c"],
        ["d", "e", "f"],
        ["g", "h", "i"]
    ];
kiir(array_column($b, 1));
kiir($b[1]);
$paros = [2, 4, 6, 8];
kiir(array_diff($a, $paros));
kiir(array_intersect($a, $paros));
kiir(array_merge($a, $paros));
kiir(array_reverse($a));
array_walk($b, 'kiir');
kiir(array_fill(0, 10, 5));

echo "A tomb osszege: " . array_sum($a) . PHP_EOL;
echo "A tomb merete: " . sizeof($a) . PHP_EOL;



function kiir($a)
{
    echo "[ ";
    foreach ($a as $b) {
        echo $b . " ";
    }
    echo "]" . PHP_EOL;
}
