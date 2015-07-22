<?php

namespace DesignPatterns\Creational\Builder;

class HouseBuilder implements BuilderInterface
{
    /**
     * @var Building
     */
    private $building;

    public function __construct()
    {
        $this->building = new Building();
    }
    public function buildFrame()
    {
        $this->building->setFrame('wooden');
    }

    public function buildWalls()
    {
        $this->building->setWalls('wooden');
    }

    public function addDoors()
    {
        $this->building->setDoorCount(2);
    }

    public function addWindows()
    {
        $this->building->setWindowCount(8);
    }

    public function paint()
    {
        $this->building->setColor('beige');
    }

    public function getBuilding()
    {
        $this->building->setType('Suburban House');

        return $this->building;
    }
}
