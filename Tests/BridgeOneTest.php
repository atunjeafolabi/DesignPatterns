<?php

declare(strict_types=1);

namespace DesignPatterns\Tests;

use DesignPatterns\Structural\Bridge\ExampleOne\HelloWorldService;
use DesignPatterns\Structural\Bridge\ExampleOne\HtmlFormatter;
use DesignPatterns\Structural\Bridge\ExampleOne\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

class BridgeOneTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());

        $this->assertSame('<p>Hello World</p>', $service->get());
    }
}
