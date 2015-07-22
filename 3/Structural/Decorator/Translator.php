<?php

namespace DesignPatterns\Structural\Decorator;

class Translator implements TranslatorInterface
{
    /**
     * @param string $string
     * @return string
     */
    public function translate($string)
    {
        return $string;
    }
}
