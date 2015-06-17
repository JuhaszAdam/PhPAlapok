<?php
namespace Novelo;

function foo(&$a)
{
    $a++;
}

?>
<?php
namespace Csokkento;

function foo(&$a)
{
    $a--;
}

?>

<?php
namespace Feladat;

$a = 5;
echo $a . PHP_EOL;
\Novelo\foo($a);
echo $a . PHP_EOL;
\Csokkento\foo($a);
echo $a . PHP_EOL;

?>
