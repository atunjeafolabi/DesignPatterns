<?php

namespace DesignPatterns\Structural\Composite\ExampleTwo;

interface Employee
{
    public function __construct(string $name, float $salary);
    public function getName(): string;
    public function setSalary(float $salary);
    public function getSalary(): float;
    public function getRoles(): array;
}
