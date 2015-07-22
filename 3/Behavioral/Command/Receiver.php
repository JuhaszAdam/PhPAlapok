<?php

namespace DesignPatterns\Behavioral\Command;

class Receiver
{
    /**
     * @param string $string
     */
    public function write($string)
    {
        echo $string;
    }
}
