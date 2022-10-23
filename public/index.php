<?php

require "vendor/autoload.php";

use transport\Bus;          
use transport\Car;
use transport\OnFoot;
use transport\StrategyTransport;

$walk = new StrategyTransport(new Bus());

$walk->strategy->send();

$walk->useStrategy(new Car());

$walk->strategy->send();

$walk->useStrategy(new OnFoot());

$walk->strategy->send();