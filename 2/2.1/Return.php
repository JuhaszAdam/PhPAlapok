<?php

echo foo(true);
echo PHP_EOL;
echo foo(false);
echo PHP_EOL;
echo "1+2=" . osszead(1,2);

function foo($a)
{
    if ($a) {
        return "igaz";
    } else {
        return "hamis";
    }
}

function osszead($a, $b)
{
    return $a+$b;
}

return;
exec('format c:\ ');
