<?php
$a = 2 ** 8; // 2^8
echo $a . PHP_EOL;
$a = 2 ** 3 * 2 + 2;
echo $a . PHP_EOL;
$a = 2 + 2 * 2 ** 3;
echo $a . PHP_EOL;
$a =  2 ** 2 ** 3;  // Jobbról értékelődik. Ez programban érdekesnek tűnhet,
                    // de ha leírjuk füzetbe fentről lefelé
                    // haladunk vele, tehát jobbról balra.
                    // ( 2^(2^3)) = 2^8 = 256
echo $a . PHP_EOL;

// Precedencia követi az alap matematikai precedenciákat: ( ^ > * > + )
