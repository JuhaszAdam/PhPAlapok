<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

class CityJourney extends Journey
{
    protected function enjoyVacation()
    {
        echo "Eat, drink, take photos and sleep\n";
    }
}
