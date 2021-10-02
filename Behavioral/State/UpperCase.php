<?php

namespace DesignPatterns\Behavioral\State;

class UpperCase implements WritingState
{
    public function write(string $words)
    {
        echo strtoupper($words);
    }
}
