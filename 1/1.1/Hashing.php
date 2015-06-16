<?php

$pw = "password";
echo $pw . PHP_EOL;
$pw = password_hash($pw, PASSWORD_BCRYPT);
echo $pw;
