<?php

namespace DesignPatterns\Behavioral\Mediator;

class BookReader
{
    /**
     * @param Book $book
     * @return string
     */
    public function read(Book $book)
    {
        echo "Reading contents of the book..." . PHP_EOL;

        return $book->getContent();
    }
}
