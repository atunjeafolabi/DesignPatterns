<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite\ExampleOne;

class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}
