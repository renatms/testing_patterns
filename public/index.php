<?php

require "vendor/autoload.php";

use transport\strategy\Bus;
use transport\strategy\Car;
use transport\strategy\OnFoot;
use transport\strategy\StrategyTransport;

$walk = new StrategyTransport(new Bus());

$walk->strategy->send();

$walk->useStrategy(new Car());

$walk->strategy->send();

$walk->useStrategy(new OnFoot());

$walk->strategy->send();