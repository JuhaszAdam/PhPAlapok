<?php

namespace DesignPatterns\Behavioral\Command;

class HelloCommand implements CommandInterface
{
    /**
     * @var Receiver
     */
    protected $output;

    /**
     * @param Receiver $console
     */
    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    /**
     * execute and output "Hello World"
     */
    public function execute()
    {
        $this->output->write('Hello World');
    }
}
