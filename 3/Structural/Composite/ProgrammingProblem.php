<?php

namespace DesignPatterns\Structural\Composite;

class ProgrammingProblem implements ProblemInterface
{
    public function handle()
    {
        echo sprintf("Programming Problem%s - Red%s - Green%s - Refactor%s", PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL);
    }
}
