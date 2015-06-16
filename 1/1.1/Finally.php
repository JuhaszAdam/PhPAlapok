<?php
foo(true);
echo PHP_EOL;
foo(false);

function foo($a)
{
    try {
        echo "Try block" . PHP_EOL;
        if ($a) {
            throw new InvalidArgumentException("Hiba");
        } else {
            throw new OutOfBoundsException("Hiba");
        }
    } catch (OutOfBoundsException $e) {
        echo "Catch block -> OutOfBoundsException" . PHP_EOL;
    } catch (InvalidArgumentException $e) {
        echo "Catch block -> InvalidArgumentException" . PHP_EOL;
    } finally {
        echo "Finally block (mindig lefut)" . PHP_EOL;
    }
}
