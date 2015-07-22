<?php

namespace DesignPatterns\Behavioral\TemplateMethod;

require_once 'Journey.php';
require_once 'BeachJourney.php';
require_once 'CityJourney.php';

$beachJourney = new BeachJourney();
$beachJourney->takeATrip();

$cityJourney = new CityJourney();
$cityJourney->takeATrip();
