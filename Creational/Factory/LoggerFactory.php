<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Factory;

interface LoggerFactory {
    public function createLogger(): Logger;
}
