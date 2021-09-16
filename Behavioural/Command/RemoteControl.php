<?php

namespace DesignPatterns\Behavioural\Command;

// Invoker
class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}
