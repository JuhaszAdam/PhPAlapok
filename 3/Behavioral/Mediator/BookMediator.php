<?php

namespace DesignPatterns\Behavioral\Mediator;

class BookMediator
{
    /**
     * @var BookDatabase
     */
    private $database;
    /**
     * @var BookReader
     */
    private $reader;
    /**
     * @var TextTranslator
     */
    private $translator;

    public function __construct(BookDatabase $database, BookReader $reader, TextTranslator $translator)
    {
        $this->database = $database;
        $this->reader = $reader;
        $this->translator = $translator;
    }

    /**
     * @param int $id
     */
    public function readABook($id)
    {
        $book = $this->database->loadBookById($id);
        $content = $this->reader->read($book);
        $this->translator->translate($content);
    }
}
