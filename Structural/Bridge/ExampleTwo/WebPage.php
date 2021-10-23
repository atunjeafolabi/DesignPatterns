<?php

namespace DesignPatterns\Structural\Bridge\ExampleTwo;

interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent();
}
