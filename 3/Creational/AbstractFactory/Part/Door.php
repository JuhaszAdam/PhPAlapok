<?php

namespace DesignPatterns\Creational\AbstractFactory;

class Door
{
    /**
     * @var int
     */
    private $count;

    public function __construct($count = 2)
    {
        $this->count = $count;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
}
