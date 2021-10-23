<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php71\PhpVersionCompare;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersionCompare;

final class Php7Test extends TestCase
{
    public function testIsPhp7(): void
    {
        static::assertTrue(PhpVersionCompare::isPhp7());
    }

    public function testIsPhp70(): void
    {
        static::assertFalse(PhpVersionCompare::isPhp70());
    }

    public function testIsPhp71(): void
    {
        static::assertTrue(PhpVersionCompare::isPhp71());
    }

    public function testIsPhp72(): void
    {
        static::assertFalse(PhpVersionCompare::isPhp72());
    }

    public function testIsPhp73(): void
    {
        static::assertFalse(PhpVersionCompare::isPhp73());
    }

    public function testIsPhp74(): void
    {
        static::assertFalse(PhpVersionCompare::isPhp74());
    }
}
