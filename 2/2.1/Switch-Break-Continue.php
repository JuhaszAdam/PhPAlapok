<?php

echo PHP_EOL . "Switch Break-el: ";

for ($i = 0; $i <= 4; $i++) {
    switchWithBreak($i);
    echo " |  ";
}

echo PHP_EOL . "Switch Break nélkül: ";

for ($i = 0; $i <= 4; $i++) {
    switchWithoutBreak($i);
    echo " |  ";
}

echo PHP_EOL . "Switch Continue-val: ";

for ($i = 0; $i <= 4; $i++) {
    switchWithContinue($i);
    echo " |  ";
}


function switchWithBreak($a)
{
    switch ($a) {
        case 0 :
            echo 'nulla ';
            break;
        case 1 :
            echo 'egy ';
            break;
        case 2 :
            echo 'kettő ';
            break;
        default :
            echo 'default ';
    }
}

function switchWithoutBreak($a)
{
    switch ($a) {
        case 0 :
            echo 'nulla ';
        case 1 :
            echo 'egy ';
        case 2 :
            echo 'kettő ';
        default :
            echo 'default ';
    }
}

function switchWithContinue($a)
{
    switch ($a) {
        case 0 : {
            echo 'nulla ';
            continue;
        }
        case 1 : {
            echo 'egy ';
            continue;
        }
        case 2 : {
            echo 'kettő ';
            continue;
        }
        default :
            echo 'default ';
    }
}
