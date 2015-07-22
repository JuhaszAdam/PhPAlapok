<?php

namespace DesignPatterns\Behavioral\Mediator;

class Book
{
    /**
     * @var string
     */
    private $content = "Empty";

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}
