<?php

namespace DesignPatterns\Structural\Composite;

require_once 'ProblemInterface.php';
require_once 'CompositeProblem.php';
require_once 'FinancialProblem.php';
require_once 'MathematicalProblem.php';
require_once 'ProgrammingProblem.php';

$problems[] = new FinancialProblem();
$problems[] = new MathematicalProblem();
$problems[] = new ProgrammingProblem();

$compositeProblem = new CompositeProblem();
foreach ($problems as $problem) {
    $compositeProblem->addPoblem($problem);
}

$compositeProblem->handle();

class Bitch{}
$bitch = new Bitch();
echo "I got 99 problems but ";
$compositeProblem->addPoblem($bitch);
