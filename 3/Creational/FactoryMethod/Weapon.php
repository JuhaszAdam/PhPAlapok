<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Weapon
{
    /**
     * @var string
     */
    private $frame;

    /**
     * @var string
     */
    private $type;

    /**
     * @param bool $type
     */
    public function setFrame($type)
    {
        $this->frame = $type ? 'Pistol' : 'Assault Rifle';
    }

    /**
     * @param bool $type
     */
    public function setName($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            'This weapon is a(n) %s %s.',
            $this->type,
            $this->frame
        );
    }
}
