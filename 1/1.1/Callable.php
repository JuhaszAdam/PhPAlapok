<?php

call_user_func('foo', "Beer");
call_user_func('bar', "Beer");

function foo($a)
{
    echo $a . "?" . PHP_EOL;
}

function bar($a)
{
    echo $a . "!";
}
