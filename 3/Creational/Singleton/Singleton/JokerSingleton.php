<?php

namespace DesignPatterns\Creational\Singleton;

class JokerSingleton
{
    /**
     * @var JokerSingleton
     */
    private static $instance;

    /**
     * @return JokerSingleton
     */
    public static function summonJoker()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    public static function tellJoke()
    {
        $jokes = [
            "Ain't it funny how the colors red, white, and blue represent freedom until they are flashing behind your car.",
            "The word 'Boob' is the Perfect word. The B looks like a top view of them, the 2 Os look like a front view, and the b looks like a side view. Perfectly engineered!",
            "My iPhone battery dies quicker than a black guy in a scary movie.",
            "Auctioneers are proof that white guys could rap if they try hard enough.",
            "I wondered why the ball was getting bigger! Then it hit me."
        ];
        echo $jokes[array_rand($jokes)] . PHP_EOL . PHP_EOL;
    }

    /**
     * Ne lehessen példányosítani
     */
    private function __construct()
    {
    }

    /**
     * Ne lehessen klónozni
     */
    private function __clone()
    {
    }

    /**
     * Ne lehessen unszériazálni
     */
    private function __wakeup()
    {
    }
}
