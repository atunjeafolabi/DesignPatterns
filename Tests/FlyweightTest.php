<?php

declare(strict_types=1);

namespace DesignPatterns\Tests;

use DesignPatterns\Structural\Facade\Computer;
use DesignPatterns\Structural\Facade\ComputerFacade;
use DesignPatterns\Structural\Flyweight\LiptonTea;
use DesignPatterns\Structural\Flyweight\TeaMaker;
use DesignPatterns\Structural\Flyweight\TeaShop;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    public function test_that_only_one_tea_instance_is_created_for_thesame_option_ordered_multiple_times() {

        $teaMaker = new TeaMaker();
        $shop = new TeaShop($teaMaker);

        $shop->takeOrder('less sugar', $table =1);
        $shop->takeOrder('less sugar', $table =1);
        $shop->takeOrder('less sugar', $table =1);

        $orders = $shop->serve();

        $this->assertCount(1, $orders);
        $this->assertInstanceOf(LiptonTea::class, $orders[$table]);
    }

    public function test_that_different_tea_instances_are_created_for_different_options() {

        $teaMaker = new TeaMaker();
        $shop = new TeaShop($teaMaker);

        $shop->takeOrder('less sugar', $tableOne =1);
        $shop->takeOrder('more milk', $tableTwo =2);
        $shop->takeOrder('without sugar', $tableThree =5);

        $orders = $shop->serve();

        $this->assertCount(3, $orders);
        $this->assertInstanceOf(LiptonTea::class, $orders[$tableOne]);
        $this->assertInstanceOf(LiptonTea::class, $orders[$tableTwo]);
        $this->assertInstanceOf(LiptonTea::class, $orders[$tableThree]);
    }
}
