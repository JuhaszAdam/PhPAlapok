<?php

namespace DesignPatterns\Behavioral\Mediator;

class BookDatabase
{
    /**
     * @param int $id
     * @return Book
     */
    public function loadBookById($id)
    {
        echo "Getting Book with Id " . $id . PHP_EOL;
        return new Book();
    }
}
