<?php

namespace DesignPatterns\Behavioral\Observer;

class Observer implements ObserverInterface
{
    /**
     * @inheritdoc
     */
    public function notify($message)
    {
        echo "[Observer] - " . $message . PHP_EOL;
    }
}
