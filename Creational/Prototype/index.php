<?php

namespace DesignPatterns\Creational\Prototype;

require "../../vendor/autoload.php";

$original = new Sheep('Jolly');
echo $original->getName();          // Jolly
echo $original->getCategory();  // Mountain Sheep

// Clone and modify what is required
$cloned = clone $original;
$cloned->setName('Dolly');
echo $cloned->getName();        // Dolly
echo $cloned->getCategory();    // Mountain sheep
