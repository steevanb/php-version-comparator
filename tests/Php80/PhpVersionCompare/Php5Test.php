<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php80\PhpVersionCompare;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersionCompare;

/**
 * @covers \Steevanb\PhpVersionCompare\PhpVersionCompare::isPhp5
 * @covers \Steevanb\PhpVersionCompare\PhpVersionCompare::isPhp53
 * @covers \Steevanb\PhpVersionCompare\PhpVersionCompare::isPhp54
 * @covers \Steevanb\PhpVersionCompare\PhpVersionCompare::isPhp55
 * @covers \Steevanb\PhpVersionCompare\PhpVersionCompare::isPhp56
 */
class Php5Test extends TestCase
{
    public function testIsPhp5(): void
    {
        static::assertFalse(PhpVersionCompare::isPhp5());
    }

    public function testIsPhp53(): void
    {
        static::assertFalse(PhpVersionCompare::isPhp53());
    }

    public function testIsPhp54(): void
    {
        static::assertFalse(PhpVersionCompare::isPhp54());
    }

    public function testIsPhp55(): void
    {
        static::assertFalse(PhpVersionCompare::isPhp55());
    }

    public function testIsPhp56(): void
    {
        static::assertFalse(PhpVersionCompare::isPhp56());
    }
}
