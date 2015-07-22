<?php

namespace DesignPatterns\Structural\Decorator;

require_once 'TranslatorInterface.php';
require_once 'Decorator.php';
require_once 'CatToHumanTranslator.php';
require_once 'Translator.php';
require_once 'HumanToCatTranslator.php';

$translator = new Translator();
$catToHumanTranslator = new CatToHumanTranslator($translator);
echo $catToHumanTranslator->translate("Meow meow meow");
echo $catToHumanTranslator->translate("Meow meow!");
echo $catToHumanTranslator->translate("Meow meow?");

$humanToCatTranslator = new HumanToCatTranslator($translator);
echo $humanToCatTranslator->translate("This cake is delicious.");
echo $humanToCatTranslator->translate("Hello, my name is Bob.");
echo $humanToCatTranslator->translate("Nice to meet you.");
