<?php

namespace DesignPatterns\Behavioral\Memento;

class Memento
{
    /**
     * @var mixed
     */
    private $state;

    /**
     * @param mixed $object
     */
    public function __construct($object)
    {
        echo "State Saved!" . PHP_EOL;
        $this->state = clone $object;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        echo "State Loaded!" . PHP_EOL;

        return clone $this->state;
    }
}
