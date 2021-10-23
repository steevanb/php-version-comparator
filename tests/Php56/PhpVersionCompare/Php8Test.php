<?php

namespace Steevanb\PhpVersionCompare\Tests\Php56\PhpVersionCompare;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersionCompare;

final class Php8Test extends TestCase
{
    public function testIsPhp8()
    {
        static::assertFalse(PhpVersionCompare::isPhp8());
    }

    public function testIsPhp80()
    {
        static::assertFalse(PhpVersionCompare::isPhp80());
    }

    public function testIsPhp81()
    {
        static::assertFalse(PhpVersionCompare::isPhp81());
    }
}
