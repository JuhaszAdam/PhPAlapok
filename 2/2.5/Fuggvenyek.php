<?php
$a = 10;
kiir($a);
novel($a);
kiir($a);
$a = egy();
kiir($a);
kiir("Ez", "egy", "szoveg.");
szamKiir();
szamKiir(5);
datumKiir(new DateTime());
$valtozoFuggveny = "kiir";
$valtozoFuggveny("Szoveg");
$valtozoFuggveny = "egy";
$a = $valtozoFuggveny();
kiir($a);
€
();

function novel(&$a)
{
    $a++;
}

function egy()
{
    return 1;
}

function kiir(...$szoveg)
{
    foreach ($szoveg as $s) {
        echo $s . " ";
    }
    echo PHP_EOL;
}

function szamKiir($i = 0)
{
    kiir($i);
}

function datumKiir(DateTime $date)
{
    echo($date->format('Y-m-d') . PHP_EOL);
}

// Érdekesség: A PhP fordítója felismeri ezt a függvényt, de a legtöbb IDE hibának jelzi. (PhPStorm)
function €() {
    echo 'Meghívodott a "€()" nevű függvény.';
}
