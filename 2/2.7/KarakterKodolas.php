<?php
var_dump(iconv_get_encoding());
$a = "Szöveg";
echo "Hossz: " . (iconv_strlen($a) . PHP_EOL);
echo "ISO-8859-ben: " . $b = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $a) . PHP_EOL;
echo "UTF-8-ban: " . iconv("ISO-8859-1//TRANSLIT", "UTF-8", $b) . PHP_EOL;
