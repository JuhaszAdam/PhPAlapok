<?php

foo(true, true, true);
foo(false, true, true);
foo(false, false, true);
foo(false, false, false);

function foo($a, $b, $c)
{
    if ($a) {
        echo " A Igaz" . PHP_EOL;
    } else {
        if ($b) {
            echo " A Hamis B Igaz" . PHP_EOL;
        } elseif ($c) {
            echo " A Hamis B Hamis C Igaz" . PHP_EOL;
        } else {
            echo " A Hamis B Hamis C Hamis" . PHP_EOL;
        }
    }
}

