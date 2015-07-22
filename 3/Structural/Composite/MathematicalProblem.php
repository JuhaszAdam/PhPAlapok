<?php

namespace DesignPatterns\Structural\Composite;

class MathematicalProblem implements ProblemInterface
{
    public function handle()
    {
        echo sprintf("Mathematical Problem%s - Drink Coffee%s - Try solving the problem%s - Repeat%s", PHP_EOL, PHP_EOL, PHP_EOL, PHP_EOL);
    }
}
