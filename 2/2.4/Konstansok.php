<?php

namespace Magic;

define("a", 1);

echo a;

echo PHP_EOL . "Magic!" . PHP_EOL;
echo "Current line: " . __LINE__ . PHP_EOL;
echo "Current line: " . __LINE__ . PHP_EOL;
//
//
echo "Current line: " . __LINE__ . PHP_EOL;
echo "Current file: " . __FILE__ . PHP_EOL;
echo "Current dir: " . __DIR__ . PHP_EOL;
foo();
echo "Current namespace: " . __NAMESPACE__ . PHP_EOL;
echo "Current PhP Versoin: " . PHP_VERSION . PHP_EOL;
echo sprintf("Current int Max: %x" , PHP_INT_MAX ). PHP_EOL;
echo sprintf("Current int Min: %x" , ~PHP_INT_MAX ). PHP_EOL;

function foo()
{
    echo "Current function: " . __FUNCTION__ . PHP_EOL;
}
