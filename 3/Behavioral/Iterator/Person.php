<?php

namespace DesignPatterns\Behavioral\Iterator;

class Person
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $gender;

    public function __construct($name, $email, $address, $gender)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }
}
