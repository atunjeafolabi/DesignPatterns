<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Decorator;

interface Coffee
{
    public function getCost();
    public function getDescription();
}
