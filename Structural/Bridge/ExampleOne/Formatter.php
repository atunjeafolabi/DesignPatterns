<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\ExampleOne;

interface Formatter
{
    public function format(string $text): string;
}
