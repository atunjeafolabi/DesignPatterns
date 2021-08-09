<?php declare(strict_types=1);

namespace DesignPatterns\Tests;

use DesignPatterns\Creational\Factory\FileLogger;
use DesignPatterns\Creational\Factory\FileLoggerFactory;
use DesignPatterns\Creational\Factory\StdoutLogger;
use DesignPatterns\Creational\Factory\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase {

    public function testCanCreateStdoutLogging() {

        $loggerFactory = new StdoutLoggerFactory();

        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging() {

        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());

        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }

}
