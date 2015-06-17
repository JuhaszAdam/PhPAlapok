<?php
elotesztelo();
hatultesztelo();
forciklus();
foreachciklus();

function elotesztelo()
{
    $i = 1;
    while ($i <= 10) {
        echo $i++ . ' ';
    }
    echo PHP_EOL;
}

function hatultesztelo()
{
    $i = 1;
    do {
        echo $i++ . ' ';
    } while ($i <= 10);
    echo PHP_EOL;
}

function forciklus()
{
    for ($i = 1; $i <= 10; $i++) {
        echo $i . ' ';
    }
    echo PHP_EOL;
}

function foreachciklus()
{
    $i = [1,2,3,4,5,6,7,8,9,10];
    foreach($i as $j){
        echo $j . ' ';
    }
    echo PHP_EOL;
}
