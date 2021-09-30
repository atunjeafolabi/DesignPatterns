<?php

namespace DesignPatterns\Behavioral\Command;

// Invoker
class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}
