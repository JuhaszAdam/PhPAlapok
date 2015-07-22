<?php

namespace DesignPatterns\Structural\Facade;

class Facade
{
    /**
     * @var HumanInterface
     */
    private $human;
    /**
     * @var InsectInterface
     */
    private $insect;
    /**
     * @var MonitorInterface
     */
    private $monitor;

    public function __construct(HumanInterface $human, InsectInterface $insect, MonitorInterface $monitor)
    {

        $this->human = $human;
        $this->insect = $insect;
        $this->monitor = $monitor;
    }

    public function kickInTheFace()
    {
        echo "Commence Face-kicking...".PHP_EOL;
        $this->human->takeDamage("face");
        $this->insect->squash();
        $this->monitor->crack();
        echo "Success!".PHP_EOL;
    }
}
