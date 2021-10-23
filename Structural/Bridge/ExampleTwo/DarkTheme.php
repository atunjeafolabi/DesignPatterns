<?php

namespace DesignPatterns\Structural\Bridge\ExampleTwo;

class DarkTheme implements Theme
{
    public function getColor()
    {
        return 'Dark Black';
    }
}
