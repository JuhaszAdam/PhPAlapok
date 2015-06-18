<?php
$dateTime = new DateTime();
echo $dateTime->format('Y.m.d') . " van most." . PHP_EOL;
echo $dateTime->add(new DateInterval("P1W"))->format('Y.m.d') . " lesz egy hét múlva." . PHP_EOL;
echo $dateTime->add(DateInterval::createFromDateString('7 weekdays'))->format('Y.m.d') . " lesz hét munkanap múlva." . PHP_EOL;
echo (new DateTime())->format('H:i:s') . " a pontos idő." . PHP_EOL;

$meloVege = (new DateTime())->setTime(16,15);


$maradekIdo = $meloVege->diff(new DateTime());
for ($i = 0; $maradekIdo->i > 0; $i++) {
    $maradekIdo = $meloVege->diff(new DateTime());
    echo $maradekIdo->format('%H:%I:%S') . PHP_EOL;
    sleep(1);
}
