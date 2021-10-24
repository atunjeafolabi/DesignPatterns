<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\ExampleOne;

class PlainTextFormatter implements Formatter
{
    public function format(string $text): string
    {
        return $text;
    }
}
