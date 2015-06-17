<?php

$pw = "password";
echo $pw . PHP_EOL;
$pw = password_hash($pw, PASSWORD_BCRYPT);
$pw2 = $pw;
echo $pw . PHP_EOL;

if (hash_equals($pw, $pw2)) {
    echo "The two hashes match.";
} else {
    echo "Something went horribly wrong.";
}
