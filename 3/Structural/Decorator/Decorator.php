<?php

namespace DesignPatterns\Structural\Decorator;

abstract class Decorator implements TranslatorInterface
{
    /**
     * @var TranslatorInterface
     */
    protected $wrapped;

    public function __construct(TranslatorInterface $wrappable)
    {
        $this->wrapped = $wrappable;
    }
}
