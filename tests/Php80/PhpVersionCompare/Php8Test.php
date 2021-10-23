<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php80\PhpVersionCompare;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersionCompare;

/**
 * @covers \Steevanb\PhpVersionCompare\PhpVersionCompare::isPhp8
 * @covers \Steevanb\PhpVersionCompare\PhpVersionCompare::isPhp80
 * @covers \Steevanb\PhpVersionCompare\PhpVersionCompare::isPhp81
 */
final class Php8Test extends TestCase
{
    public function testIsPhp8(): void
    {
        static::assertTrue(PhpVersionCompare::isPhp8());
    }

    public function testIsPhp80(): void
    {
        static::assertTrue(PhpVersionCompare::isPhp80());
    }

    public function testIsPhp81(): void
    {
        static::assertFalse(PhpVersionCompare::isPhp81());
    }
}
