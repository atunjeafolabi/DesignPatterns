<?php

namespace DesignPatterns\Behavioral\Command;

interface Command
{
    public function execute();
    public function undo();
    public function redo();
}
