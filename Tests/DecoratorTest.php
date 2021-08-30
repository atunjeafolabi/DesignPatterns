<?php

declare(strict_types=1);

namespace DesignPatterns\Tests;

use DesignPatterns\Structural\Decorator\MilkCoffee;
use DesignPatterns\Structural\Decorator\SimpleCoffee;
use DesignPatterns\Structural\Decorator\VanillaCoffee;
use DesignPatterns\Structural\Decorator\WhipCoffee;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testSimpleCoffee() {

        $simpleCoffee = new SimpleCoffee();

        $this->assertEquals(10, $simpleCoffee->getCost());
        $this->assertEquals("Simple coffee", $simpleCoffee->getDescription());
    }

    public function testMilkCoffee()
    {
        $simpleCoffee = new SimpleCoffee();
        $milkCoffee = new MilkCoffee($simpleCoffee);

        $this->assertEquals(12, $milkCoffee->getCost());
        $this->assertEquals("Simple coffee, milk", $milkCoffee->getDescription());
    }

    public function testWhipCoffee()
    {
        $simpleCoffee = new SimpleCoffee();
        $whipCoffee = new WhipCoffee($simpleCoffee);

        $this->assertEquals(15, $whipCoffee->getCost());
        $this->assertEquals("Simple coffee, whip", $whipCoffee->getDescription());
    }

    public function testVanillaCoffee()
    {
        $simpleCoffee = new SimpleCoffee();
        $vanillaCoffee = new VanillaCoffee($simpleCoffee);

        $this->assertEquals(13, $vanillaCoffee->getCost());
        $this->assertEquals("Simple coffee, vanilla", $vanillaCoffee->getDescription());
    }

    public function testMilkAndWhipCoffee()
    {
        $simpleCoffee = new SimpleCoffee();
        $milkCoffee = new MilkCoffee($simpleCoffee);
        $whipCoffeeWithMilk = new WhipCoffee($milkCoffee);

        $this->assertEquals(17, $whipCoffeeWithMilk->getCost());
        $this->assertEquals("Simple coffee, milk, whip", $whipCoffeeWithMilk->getDescription());
    }

    public function testMilkAndWhipAndVanillaCoffee()
    {
        $simpleCoffee = new SimpleCoffee();
        $milkCoffee = new MilkCoffee($simpleCoffee);
        $whipCoffeeWithMilk = new WhipCoffee($milkCoffee);
        $vanillaCoffeeWithMilkWithWhip = new VanillaCoffee($whipCoffeeWithMilk);

        $this->assertEquals(20, $vanillaCoffeeWithMilkWithWhip->getCost());
        $this->assertEquals("Simple coffee, milk, whip, vanilla", $vanillaCoffeeWithMilkWithWhip->getDescription());
    }
}
