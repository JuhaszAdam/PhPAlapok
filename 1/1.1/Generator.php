<?php

function tombGenerator($db)
{
    for ($i = 0; $i < $db; $i++) {
        yield $i;
    }
}

$tomb = iterator_to_array(tombGenerator(10));
foreach ($tomb as $elem) {
    echo $elem . " ";
}
