<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Factory;

class StdoutLoggerFactory implements LoggerFactory {
    public function createLogger(): Logger {
        return new StdoutLogger();
    }
}
