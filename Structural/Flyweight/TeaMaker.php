<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Flyweight;

/**
 * Acts as a factory and saves the tea
 */
class TeaMaker
{
    protected $availableTea = [];

    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new LiptonTea();
        }

        return $this->availableTea[$preference];
    }
}
