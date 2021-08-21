<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Parts;

abstract class Vehicle
{
    private $parts;

    public function setPart(string $key, object $value) {
        $this->parts[$key] = $value;
    }
}
