<?php
echo "GOTO IS EVIL". PHP_EOL;

$i = 0;
start:
$i++;
if ($i <= 10) {
    echo $i . PHP_EOL;
    GOTO start;
}
