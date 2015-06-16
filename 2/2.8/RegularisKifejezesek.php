<?php
$a = "abcASDdeABASDCDE12ASD345";
echo "alap:  ";
kiir($a);
$a = preg_replace('#ASD#', '', $a);
echo "ASD kitörölve:  ";
kiir($a);
$a = preg_replace('#[b-d]#', '', $a);
echo "Kisbetűk b-től d-ig kitörölve:  ";
kiir($a);
if (preg_match('#123#', $a)) {
    echo "Tartalmazza az '123' mintát";
} else {
    throw new Exception("Valami hiba történt!");
}
function kiir($a)
{
    echo $a . PHP_EOL;
}
