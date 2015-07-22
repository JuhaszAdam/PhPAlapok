<?php

namespace DesignPatterns\Creational\Builder;

interface BuilderInterface
{
    public function buildFrame();

    public function buildWalls();

    public function addDoors();

    public function addWindows();

    public function paint();

    public function getBuilding();
}
