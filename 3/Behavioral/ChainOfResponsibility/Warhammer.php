<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class Warhammer extends AbstractBugSquasher
{
    /**
     * @param int $size
     * @return bool
     */
    protected function squash($size)
    {
        echo "Striking bug with Warhammer... ";
        if ($size < 9) {
            return true;
        }
        echo "Resisted! ";

        return false;
    }
}
