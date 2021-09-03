<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Flyweight;

class TeaShop
{
    protected array $orders;
    protected TeaMaker $teaMaker;

    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    public function takeOrder(string $teaType, int $table)
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    public function serve()
    {
        return $this->orders;
//        foreach ($this->orders as $table => $tea) {
//            echo "Serving tea to table# " . $table;
//        }
    }
}
