<?php

namespace DesignPatterns\Behavioral\Observer;

interface ObserverInterface
{
    /**
     * @param string $message
     */
    public function notify($message);
}
