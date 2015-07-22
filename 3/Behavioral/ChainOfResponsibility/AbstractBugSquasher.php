<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

abstract class AbstractBugSquasher
{
    /**
     * @var AbstractBugSquasher
     */
    private $successor;

    /**
     * @param AbstractBugSquasher $bugSquasher
     */
    final public function append(AbstractBugSquasher $bugSquasher)
    {
        if (is_null($this->successor)) {
            $this->successor = $bugSquasher;
        } else {
            $this->successor->append($bugSquasher);
        }
    }

    /**
     * @param int $size
     * @return bool
     */
    final public function handle($size)
    {
        echo sprintf("[Bug Size %d] ",$size);
        $processed = $this->squash($size);
        if (!$processed) {
            if (!is_null($this->successor)) {
                $processed = $this->successor->squash($size);
            }
        }

        if ($processed) {
            echo " Bug squashed!" . PHP_EOL;
        } else {
            echo "Dude, run." . PHP_EOL;
        }
    }

    /**
     * @param int $size
     * @return bool
     */
    abstract protected function squash($size);

}
