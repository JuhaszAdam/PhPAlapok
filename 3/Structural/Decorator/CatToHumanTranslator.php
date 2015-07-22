<?php

namespace DesignPatterns\Structural\Decorator;

class CatToHumanTranslator extends Decorator
{
    /**
     * @param string $string
     * @return string
     */
    public function translate($string)
    {
        $string = $this->wrapped->translate($string);

        return "Give me food!" . PHP_EOL;
    }
}
