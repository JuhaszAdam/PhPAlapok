<?php

namespace DesignPatterns\Creational\Builder;

class Building
{
    /**
     * @var string
     */
    private $frame;

    /**
     * @var string
     */
    private $walls;

    /**
     * @var int
     */
    private $doorCount;

    /**
     * @var int
     */
    private $windowCount;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $type;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getFrame()
    {
        return $this->frame;
    }

    /**
     * @param string $frame
     */
    public function setFrame($frame)
    {
        $this->frame = $frame;
    }

    /**
     * @return string
     */
    public function getWalls()
    {
        return $this->walls;
    }

    /**
     * @param string $walls
     */
    public function setWalls($walls)
    {
        $this->walls = $walls;
    }

    /**
     * @return int
     */
    public function getDoorCount()
    {
        return $this->doorCount;
    }

    /**
     * @param int $doorCount
     */
    public function setDoorCount($doorCount)
    {
        $this->doorCount = $doorCount;
    }

    /**
     * @return int
     */
    public function getWindowCount()
    {
        return $this->windowCount;
    }

    /**
     * @param int $windowCount
     */
    public function setWindowCount($windowCount)
    {
        $this->windowCount = $windowCount;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            'This building is a %s %s, it has a %s frame, %s walls, %d doors and %d windows.',
            $this->color,
            $this->type,
            $this->frame,
            $this->walls,
            $this->doorCount,
            $this->windowCount
        );
    }
}
