<?php

declare(strict_types=1);

namespace DesignPatterns\Tests;

use DesignPatterns\Structural\Fluent\Sql;
use PHPUnit\Framework\TestCase;

class FluentTest extends TestCase
{
    public function testBuildSQL()
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        $this->assertSame('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}
