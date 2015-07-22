<?php

namespace DesignPatterns\Behavioral\Observer;

class User
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
     * @var ObserverInterface[]
     */
    private $observers = [];

    /**
     * @return string
     */
    public function getName()
    {
        $this->notify('Name Loaded!');
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->notify('Name Set!');
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        $this->notify('Email Loaded!');
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->notify('Email Set!');
        $this->email = $email;
    }

    /**
     * @return ObserverInterface
     */
    public function getObservers()
    {
        $this->notify('Observers Loaded!');
        return $this->observers;
    }

    /**
     * @param ObserverInterface $observers
     */
    public function addObserver($observers)
    {
        $this->notify('Observer Added!');
        $this->observers[] = $observers;
    }

    /**
     * @param string $message
     */
    private function notify($message)
    {
        foreach ($this->observers as $observer) {
            /** @var ObserverInterface $observer */
            $observer->notify($message);
        }
    }
}
