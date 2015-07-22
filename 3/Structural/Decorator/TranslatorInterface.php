<?php

namespace DesignPatterns\Structural\Decorator;

interface TranslatorInterface
{
    /**
     * @param string $string
     * @return string
     */
    public function translate($string);
}
