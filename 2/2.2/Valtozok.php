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
