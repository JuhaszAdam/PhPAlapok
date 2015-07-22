<?php

namespace DesignPatterns\Behavioral\Iterator;

class PersonIterator
{

    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * @param int $i
     * @return string
     */
    public function get($i)
    {
        switch ($i) {
            case 0:
                return $this->person->getName();
                break;
            case 1:
                return $this->person->getEmail();
                break;
            case 2:
                return $this->person->getAddress();
                break;
            case 3:
                return $this->person->getGender();
                break;
            default:
                return "Out of Bounds!";
        }
    }
}
