<?php

namespace DesignPatterns\Creational\Builder;

class FireDepartmentBuilder implements BuilderInterface
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
        $this->building->setFrame('brick');
    }

    public function buildWalls()
    {
        $this->building->setWalls('brick');
    }

    public function addDoors()
    {
        $this->building->setDoorCount(12);
    }

    public function addWindows()
    {
        $this->building->setWindowCount(34);
    }

    public function paint()
    {
        $this->building->setColor('red');
    }

    public function getBuilding()
    {
        $this->building->setType('Fire Department');

        return $this->building;
    }
}
