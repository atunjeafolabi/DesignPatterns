<?php

namespace DesignPatterns\Behavioural\Command;

interface Command
{
    public function execute();
    public function undo();
    public function redo();
}
