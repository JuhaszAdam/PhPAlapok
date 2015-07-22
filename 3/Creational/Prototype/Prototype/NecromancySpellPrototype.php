<?php

namespace DesignPatterns\Creational\Prototype;

class NecromancySpellPrototype extends AbstractSpellPrototype
{
    /**
     * @var string
     */
    protected $category = "Necromancy";

    /**
     * @var string
     */
    protected $ability = "It raises the dead!";

    /**
     * @return AbstractSpellPrototype
     */
    public function __clone()
    {
    }
}
