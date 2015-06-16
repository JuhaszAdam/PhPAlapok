<?php

trait Alapmuveletek
{
    public function osszeg()
    {
        return $this->a + $this->b;
    }

    public function kulonbseg()
    {
        return $this->a - $this->b;
    }
}

class FeladatOsztaly
{
    use Alapmuveletek;
    /**
     * @var int
     */
    protected $a;

    /**
     * @var int
     */
    protected $b;

    /**
     * @param int $a
     * @param int $b
     */
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
}

$objektum = new FeladatOsztaly(2, 3);
echo $objektum->osszeg() . PHP_EOL;
echo $objektum->kulonbseg();
