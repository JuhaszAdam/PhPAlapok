<?php

namespace DesignPatterns\Structural\Decorator;

class HumanToCatTranslator extends Decorator
{
    /**
     * @param string $string
     * @return string
     */
    public function translate($string)
    {
        $string = $this->wrapped->translate($string);
        $result = "Meow";
        for ($i = 0; $i < rand(2, 10); $i++) {
            $result .= " meow";
        }

        return $result . "!" . PHP_EOL;
    }
}
