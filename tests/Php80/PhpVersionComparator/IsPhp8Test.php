<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php80\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator;

/**
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp8
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp80
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::isPhp81
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
