<?php
namespace FooNamespace;
class Foo
{
}

?>

<?php
namespace BarNamespace;
class Bar
{
}

?>


<?php
namespace SomethingElse;

use BarNamespace\Bar;
use FooNamespace\Foo;

echo "Foo class név: " . Foo::class . PHP_EOL;
echo "Bar class név: " . Bar::class . PHP_EOL;
?>
