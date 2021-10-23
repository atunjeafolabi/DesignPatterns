<?php

namespace DesignPatterns\Structural\Bridge\ExampleTwo;

class AqueTheme implements Theme
{
    public function getColor()
    {
        return 'Aqua blue';
    }
}
