<?php

namespace DesignPatterns\Behavioral\Command;

class Invoker
{
    /**
     * @var CommandInterface
     */
    protected $command;

    /**
     * @param CommandInterface $command
     */
    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    /**
     * executes the command
     */
    public function run()
    {
        $this->command->execute();
    }
}
