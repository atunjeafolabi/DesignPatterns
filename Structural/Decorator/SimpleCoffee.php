<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator;

class SimpleCoffee implements Coffee
{
    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        return 'Simple coffee';
    }
}
