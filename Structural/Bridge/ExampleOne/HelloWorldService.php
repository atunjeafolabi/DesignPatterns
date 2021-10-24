<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Bridge\ExampleOne;

class HelloWorldService extends Service
{
    public function get(): string
    {
        return $this->implementation->format('Hello World');
    }
}
