<?php

namespace DesignPatterns\Creational\Prototype;

class NatureSpellPrototype extends AbstractSpellPrototype
{
    /**
     * @var string
     */
    protected $category = "Nature";

    /**
     * @var string
     */
    protected $ability = "It heals!";

    /**
     * @return AbstractSpellPrototype
     */
    public function __clone()
    {
    }
}
