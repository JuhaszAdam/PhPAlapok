<?php

namespace DesignPatterns\Structural\Proxy;

class Cat
{
    /**
     * @var string
     */
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function scratch()
    {
        echo $this->name . ' purrs.' . PHP_EOL;
    }
}
