<?php

declare(strict_types=1);

namespace DesignPatterns\Tests;

use DesignPatterns\Structural\Facade\Computer;
use DesignPatterns\Structural\Facade\ComputerFacade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testTurnOn() {
        $computerFacade = new ComputerFacade(new Computer());
        $computerFacade->turnOn();

        $this->assertEquals("ON", $computerFacade->getComputer()->getStatus());
    }

    public function testTurnOff() {
        $computerFacade = new ComputerFacade(new Computer());
        $computerFacade->turnOff();

        $this->assertEquals("OFF", $computerFacade->getComputer()->getStatus());
    }
}
