<?php

$lottozok = [
    ["Foo1", "Bar1", "42, 23, 14, 1, 5, 7"],
    ["Foo2", "Bar2", "23, 45, 73, 88, 23"],
    ["Foo3", "Bar3", "16, 25, 7, 5, 22"]
];

foreach ($lottozok as list($vNev, $kNev, $szamok)) {
    echo sprintf('- %s %s lottózó számai: %s', $vNev, $kNev, $szamok) . PHP_EOL;
}

$nemSkalarisKulcsok = [
    "Egy" => 1,
    "Ketto" => 2,
    "Harom" => 3
];

foreach ($nemSkalarisKulcsok as $kulcs => $elem) {
    echo $kulcs . " => " . $elem . PHP_EOL;
}
