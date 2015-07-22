<?php

namespace DesignPatterns\Creational\Prototype;

class ElementalSpellPrototype extends AbstractSpellPrototype
{
    /**
     * @var string
     */
    protected $category = "Elemental";

    /**
     * @var string
     */
    protected $ability = "It burns things alive!";

    /**
     * @return AbstractSpellPrototype
     */
    public function __clone()
    {
    }
}
