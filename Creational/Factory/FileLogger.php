<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Factory;

class FileLogger implements Logger {

    /**
     * @var string
     */
    private $filePath;

    public function __construct(string $filePath) {
        $this->filePath = $filePath;
    }

    public function log(string $message) {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }

}
