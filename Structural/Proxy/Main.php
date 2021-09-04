<?php

declare(strict_types=1);

require_once "./vendor/autoload.php";

use DesignPatterns\Structural\Proxy\LabDoor;
use DesignPatterns\Structural\Proxy\SecuredDoor;

$door = new SecuredDoor(new LabDoor());
$door->open('invalid');         // Big no! It ain't possible.

$door->open('$ecr@t');          // Opening lab door
$door->close();                          // Closing lab door
