<?php

class Foo
{
    /**
     * @var int
     */
    private $a;

    /**
     * @param int $a
     */
    public function __construct($a)
    {
        $this->a = $a;
    }

    /**
     * @return array
     */
    public function __debugInfo()
    {
        return ['a+2' => $this->a + 2];
    }
}

$foo = new Foo(5);
var_dump($foo);
