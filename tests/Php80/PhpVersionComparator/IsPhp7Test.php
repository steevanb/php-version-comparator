<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php80\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator;

/**
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp7
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp70
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp71
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp72
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp73
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp74
 */
final class IsPhp7Test extends TestCase
{
    public function testIsPhp7(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp7());
    }

    public function testIsPhp70(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp70());
    }

    public function testIsPhp71(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp71());
    }

    public function testIsPhp72(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp72());
    }

    public function testIsPhp73(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp73());
    }

    public function testIsPhp74(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp74());
    }
}
