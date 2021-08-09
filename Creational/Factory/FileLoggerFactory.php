<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Factory;

class FileLoggerFactory implements LoggerFactory {

    /**
     * @var string
     */
    private $filePath;

    public function __construct(string $filePath) {
        $this->filePath = $filePath;
    }

    public function createLogger(): Logger {
        return new FileLogger($this->filePath);
    }

}
