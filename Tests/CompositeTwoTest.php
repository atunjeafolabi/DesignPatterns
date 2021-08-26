<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Composite\Tests;

use DesignPatterns\Structural\Composite\ExampleTwo\Designer;
use DesignPatterns\Structural\Composite\ExampleTwo\Developer;
use DesignPatterns\Structural\Composite\ExampleTwo\Employee;
use DesignPatterns\Structural\Composite\ExampleTwo\Organization;
use PHPUnit\Framework\TestCase;

class CompositeTwoTest extends TestCase
{
    public function testRender()
    {
        // Prepare the employees
        $john = new Developer('John Doe', 12000);
        $jane = new Designer('Jane Doe', 15000);

        // Add them to organization
        $organization = new Organization();
        $organization->addEmployee($john);
        $organization->addEmployee($jane);

        $this->assertSame(27000.0, $organization->getNetSalaries());
    }
}
