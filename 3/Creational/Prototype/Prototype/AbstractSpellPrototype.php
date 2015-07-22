<?php

namespace DesignPatterns\Creational\Prototype;

abstract class AbstractSpellPrototype
{
    /**
     * @var string
     */
    protected $category;

    /**
     * @var string
     */
    protected $ability;

    /**
     * @var string
     */
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function cast()
    {
        echo sprintf('Casting %s! %s%s', $this->name, $this->ability, PHP_EOL);
    }

    /**
     * @return AbstractSpellPrototype
     */
    abstract public function __clone();
}
