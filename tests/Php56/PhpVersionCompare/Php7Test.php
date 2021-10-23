<?php

namespace Steevanb\PhpVersionCompare\Tests\Php56\PhpVersionCompare;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersionCompare;

final class Php7Test extends TestCase
{
    public function testIsPhp7()
    {
        static::assertFalse(PhpVersionCompare::isPhp7());
    }

    public function testIsPhp70()
    {
        static::assertFalse(PhpVersionCompare::isPhp70());
    }

    public function testIsPhp71()
    {
        static::assertFalse(PhpVersionCompare::isPhp71());
    }

    public function testIsPhp72()
    {
        static::assertFalse(PhpVersionCompare::isPhp72());
    }

    public function testIsPhp73()
    {
        static::assertFalse(PhpVersionCompare::isPhp73());
    }

    public function testIsPhp74()
    {
        static::assertFalse(PhpVersionCompare::isPhp74());
    }
}
