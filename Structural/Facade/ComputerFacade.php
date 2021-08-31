<?php

namespace DesignPatterns\Structural\Facade;

class ComputerFacade
{
    private Computer $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function turnOn()
    {
        $this->computer->getElectricShock();
        $this->computer->makeSound();
        $this->computer->showLoadingScreen();
        $this->computer->bam();

        $this->computer->setStatus("ON");
    }

    public function turnOff()
    {
        $this->computer->closeEverything();
        $this->computer->pullCurrent();
        $this->computer->sooth();

        $this->computer->setStatus("OFF");
    }

    public function getComputer()
    {
        return $this->computer;
    }
}
