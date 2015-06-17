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
echo "Warning! PhPInfo dump in:" . PHP_EOL;
for ($i = 5; $i > 0; $i--) {
    echo $i . PHP_EOL;
    sleep(1);
}
phpinfo();

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
