<?php

namespace Steevanb\PhpVersionCompare\Tests\Php56\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator;

final class IsPhp8Test extends TestCase
{
    public function testIsPhp8()
    {
        static::assertFalse(PhpVersionComparator::isPhp8());
    }

    public function testIsPhp80()
    {
        static::assertFalse(PhpVersionComparator::isPhp80());
    }

    public function testIsPhp81()
    {
        static::assertFalse(PhpVersionComparator::isPhp81());
    }
}
