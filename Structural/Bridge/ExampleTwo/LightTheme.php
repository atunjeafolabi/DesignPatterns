<?php

namespace DesignPatterns\Structural\Bridge\ExampleTwo;

class LightTheme implements Theme
{
    public function getColor()
    {
        return 'Off white';
    }
}
