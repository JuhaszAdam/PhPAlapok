<?php
$a = 'alma';
kiir($a);
kiir('nem alma');

$c = 1;
novel($c);
kiir($c);
novelReferenciaval($c);
kiir($c);
dinamikusValtozonevek();

function kiir($a)
{
    echo $a . PHP_EOL;
}

function novel($a)
{
    $a++;
}

function novelReferenciaval(&$a)
{
    $a++;
}

function dinamikusValtozonevek()
{
    for ($i = 0; $i <= 5; $i++) {
        ${"Valtozo" . $i} = $i;
    }

    var_dump(get_defined_vars());
}

/*
 * Note that unlike Java and C++, variables declared inside blocks such as loops or if's,
 * will also be recognized and accessible outside of the block, so:
 */
for ($j = 0; $j < 3; $j++) {
    if ($j == 1)
        $variable_inside_the_loop = 4;
}
echo 'Variable inside the loop: ' . $variable_inside_the_loop . PHP_EOL;

/*
 * Ez elrontja az ágyazott ciklusokat is, ha ugyanazt a ciklusváltozót használjuk!!!
 */

$i = 0;
while ($i <= 10) {
    while ($i <= 10) {
        $i++;
    }

    echo "Csak egyszer futottam le 10 helyett!!!";
    $i++;
}
