<?php

namespace DesignPatterns\Structural\Composite;

class FinancialProblem implements ProblemInterface
{
    public function handle()
    {
        echo sprintf("Financial Problem%s - Go to Work%s - Make Money%s",PHP_EOL,PHP_EOL,PHP_EOL);
    }
}
