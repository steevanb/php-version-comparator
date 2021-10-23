<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php80\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\Comparator\PhpVersionComparator;

/**
 * @covers \Steevanb\VersionComparator\Comparator\PhpVersionComparator::isPhp8
 * @covers \Steevanb\VersionComparator\Comparator\PhpVersionComparator::isPhp80
 * @covers \Steevanb\VersionComparator\Comparator\PhpVersionComparator::isPhp81
 */
final class IsPhp8Test extends TestCase
{
    public function testIsPhp8(): void
    {
        static::assertTrue(PhpVersionComparator::isPhp8());
    }

    public function testIsPhp80(): void
    {
        static::assertTrue(PhpVersionComparator::isPhp80());
    }

    public function testIsPhp81(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp81());
    }
}
