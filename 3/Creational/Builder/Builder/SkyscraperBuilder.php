<?php

namespace DesignPatterns\Creational\Builder;

class SkyscraperBuilder implements BuilderInterface
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
        $this->building->setFrame('steel');
    }

    public function buildWalls()
    {
        $this->building->setWalls('concrete');
    }

    public function addDoors()
    {
        $this->building->setDoorCount(292);
    }

    public function addWindows()
    {
        $this->building->setWindowCount(6516);
    }

    public function paint()
    {
        $this->building->setColor('grey');
    }

    public function getBuilding()
    {
        $this->building->setType('Skyscraper');

        return $this->building;
    }
}
