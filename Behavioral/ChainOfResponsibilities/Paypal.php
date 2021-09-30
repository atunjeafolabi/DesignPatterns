<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

class Paypal extends Account
{
    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
