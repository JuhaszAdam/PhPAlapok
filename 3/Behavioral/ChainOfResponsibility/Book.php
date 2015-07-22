<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class Book extends AbstractBugSquasher
{
    /**
     * @param int $size
     * @return bool
     */
    protected function squash($size)
    {
        echo "Striking bug with Book... ";

        if ($size < 5) {
            return true;
        }
        echo "Resisted! ";

        return false;
    }
}
