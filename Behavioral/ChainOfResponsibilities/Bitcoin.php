<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioural\ChainOfResponsibilities;

class Bitcoin extends Account
{
    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
