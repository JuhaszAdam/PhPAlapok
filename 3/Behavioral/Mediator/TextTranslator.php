<?php

namespace DesignPatterns\Behavioral\Mediator;

class TextTranslator
{
    /**
     * @param string $text
     */
    public function translate($text)
    {
        echo "Translating text..." . PHP_EOL;
        echo "Success! You have read a book! (Kind of)";
    }
}
