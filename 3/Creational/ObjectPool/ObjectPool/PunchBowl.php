<?php

namespace DesignPatterns\Creational\ObjectPool;

class PunchBowl
{
    /**
     * @var int
     */
    private $capacity;

    /**
     * @var PunchCup[]
     */
    private $punchBowl;

    public function __construct($capacity = 5)
    {
        $this->capacity = $capacity;
        $this->refill();
    }

    public function refill()
    {
        echo "Refilling Punch Bowl..." . PHP_EOL;
        while (sizeof($this->punchBowl) < $this->capacity) {
            echo sizeof($this->punchBowl) . '/' . $this->capacity . PHP_EOL;
            $this->punchBowl[] = new PunchCup();
        }
        echo sizeof($this->punchBowl) . '/' . $this->capacity . PHP_EOL . 'Done!' . PHP_EOL;
    }

    public function getPunchCup()
    {
        if (empty($this->punchBowl)) {
            $this->refill();
        }
        echo sizeof($this->punchBowl)-1 . '/' . $this->capacity . ' cups of Punch remains.' . PHP_EOL;

        return array_pop($this->punchBowl);
    }
}
