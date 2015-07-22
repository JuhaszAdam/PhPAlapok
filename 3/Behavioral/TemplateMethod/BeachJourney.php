<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

class BeachJourney extends Journey
{
    protected function enjoyVacation()
    {
        echo "Swimming and sun-bathing\n";
    }
}
