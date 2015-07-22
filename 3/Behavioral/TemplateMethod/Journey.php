<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

abstract class Journey
{
    final public function takeATrip()
    {
        $this->buyAFlight();
        $this->takePlane();
        $this->enjoyVacation();
        $this->buyGift();
        $this->takePlane();
    }

    abstract protected function enjoyVacation();

    protected function buyGift()
    {
    }

    private function buyAFlight()
    {
        echo "Buying a flight\n";
    }

    final protected function takePlane()
    {
        echo "Taking the plane\n";
    }
}
