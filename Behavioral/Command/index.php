<?php

use DesignPatterns\Behavioural\Command\Bulb;
use DesignPatterns\Behavioural\Command\RemoteControl;
use DesignPatterns\Behavioural\Command\TurnOff;
use DesignPatterns\Behavioural\Command\TurnOn;

require_once "../../vendor/autoload.php";

$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn);   // Bulb has been lit!
$remote->submit($turnOff);  // Darkness!
