<?php
$dateTime = new DateTime();
echo $dateTime->format('Y.m.d') . " van most." . PHP_EOL;
echo $dateTime->add(new DateInterval("P1W"))->format('Y.m.d') . " lesz egy hét múlva." . PHP_EOL;
echo $dateTime->add(DateInterval::createFromDateString('7 weekdays'))->format('Y.m.d') . " lesz hét munkanap múlva." . PHP_EOL;
echo (new DateTime())->format('H:i:s') . " a pontos idő." . PHP_EOL;

echo '2015 Utolsó februári napja: ' . ((new DateTime("last day of february 2015"))->format('Y-m-d')) . PHP_EOL;
echo '2016 Utolsó februári napja: ' . ((new DateTime("last day of february 2016"))->format('Y-m-d')) . PHP_EOL;
echo 'Következő munkanap ' . ((new DateTime("next weekday"))->format('Y F jS - l, \t\h\e zS \d\a\y \o\f \t\h\e \y\e\a\r\.')) . PHP_EOL;
echo 'Következő dekád: ' . ((new DateTime("10 years"))->format('Y-m-d')) . PHP_EOL;
echo 'Mai nap RFC 2822 formában: ' . ((new DateTime())->format('r')) . PHP_EOL;
echo 'Mai nap ISO 8601 formában: ' . ((new DateTime())->format('c')) . PHP_EOL;
echo 'Jelenleg ' . ($str = ((new DateTime())->format('I') == 1) ? "nyári időszámítás van." : "téli időszámítás van.") . PHP_EOL;
echo 'Jelenleg ' . ($str = ((new DateTime())->format('L') == 1) ? "szökőév van." : "nincs szökőév.") . PHP_EOL;
echo 'Ma van a jelenlegi év ' . (new Datetime())->format('W') . ". hete, " . (new Datetime())->format('z') . ". napja." . PHP_EOL;
echo 'Valamikor élt egy ' . ((new DateTime())->format('F')) . " nevű római." . PHP_EOL;

//countdown();

function countdown()
{
    $meloVege = (new DateTime())->setTime(16, 15);

    $maradekIdo = $meloVege->diff(new DateTime());
    for ($i = 0; $maradekIdo->i > 0; $i++) {
        $maradekIdo = $meloVege->diff(new DateTime());
        echo "\r Maradek Ido: " . $maradekIdo->format('%H:%I:%S');
        sleep(1);
    }
}