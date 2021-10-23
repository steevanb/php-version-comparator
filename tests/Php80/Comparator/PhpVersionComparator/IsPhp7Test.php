<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php80\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\Comparator\PhpVersionComparator;

/**
 * @covers \Steevanb\VersionComparator\Comparator\PhpVersionComparator::isPhp7
 * @covers \Steevanb\VersionComparator\Comparator\PhpVersionComparator::isPhp70
 * @covers \Steevanb\VersionComparator\Comparator\PhpVersionComparator::isPhp71
 * @covers \Steevanb\VersionComparator\Comparator\PhpVersionComparator::isPhp72
 * @covers \Steevanb\VersionComparator\Comparator\PhpVersionComparator::isPhp73
 * @covers \Steevanb\VersionComparator\Comparator\PhpVersionComparator::isPhp74
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
