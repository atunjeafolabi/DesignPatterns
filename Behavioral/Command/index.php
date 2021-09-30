<?php

use DesignPatterns\Behavioral\Command\Bulb;
use DesignPatterns\Behavioral\Command\RemoteControl;
use DesignPatterns\Behavioral\Command\TurnOff;
use DesignPatterns\Behavioral\Command\TurnOn;

require_once "../../vendor/autoload.php";

$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn);   // Bulb has been lit!
$remote->submit($turnOff);  // Darkness!
