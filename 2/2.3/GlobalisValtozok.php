<?php

$a = "Globális Változó";
foo();

function foo(){
    $a = "Lokális Változó";
    echo $a.PHP_EOL.$GLOBALS["a"];
}
