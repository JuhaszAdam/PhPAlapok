<?php

namespace DesignPatterns\Structural\Composite;

class CompositeProblem implements ProblemInterface
{
    /**
     * @var ProblemInterface[]
     */
    private $problemList;

    /**
     * @param ProblemInterface $problem
     */
    public function addPoblem($problem)
    {
        if (array_search(ProblemInterface::class, class_implements(get_class($problem)))) {
            $this->problemList[] = $problem;
        } else {
            echo sprintf(
              '"%s" does not implement the Problem Interface!%s',
                (get_class($problem)),
                PHP_EOL
            );
        }
    }

    public function handle()
    {
        foreach ($this->problemList as $problem) {
            $problem->handle();
        }
    }
}
