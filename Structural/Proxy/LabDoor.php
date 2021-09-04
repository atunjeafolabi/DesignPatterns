<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Proxy;

class LabDoor implements Door
{
    public function open()
    {
        echo "Opening lab door";
    }

    public function close()
    {
        echo "Closing the lab door";
    }
}
