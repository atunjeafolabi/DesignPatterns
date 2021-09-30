<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

class Bank extends Account
{
    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
