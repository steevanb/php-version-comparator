<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php80\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator;

/**
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp5
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp53
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp54
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp55
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp56
 */
final class IsPhp5Test extends TestCase
{
    public function testIsPhp5(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp5());
    }

    public function testIsPhp53(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp53());
    }

    public function testIsPhp54(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp54());
    }

    public function testIsPhp55(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp55());
    }

    public function testIsPhp56(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp56());
    }
}
