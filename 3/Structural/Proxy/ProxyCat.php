<?php

namespace DesignPatterns\Structural\Proxy;

class ProxyCat extends Cat
{
    /**
     * @var bool
     */
    protected $isDirty = false;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        parent::__construct($name);

        if (null !== $name) {
            $this->isDirty = true;
        }
    }

    public function scratch()
    {
        echo $this->name . ' purrs.' . PHP_EOL;
        $this->isDirty = true;
    }

    public function clean()
    {
        $this->isDirty = false;
    }
}
