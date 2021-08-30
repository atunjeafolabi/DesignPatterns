<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator;

class WhipCoffee implements Coffee
{
    protected Coffee $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', whip';
    }
}
