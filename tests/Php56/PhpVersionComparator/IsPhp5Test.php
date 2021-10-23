<?php

namespace Steevanb\PhpVersionCompare\Tests\Php56\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator;

final class IsPhp5Test extends TestCase
{
    public function testIsPhp5()
    {
        static::assertTrue(PhpVersionComparator::isPhp5());
    }

    public function testIsPhp53()
    {
        static::assertFalse(PhpVersionComparator::isPhp53());
    }

    public function testIsPhp54()
    {
        static::assertFalse(PhpVersionComparator::isPhp54());
    }

    public function testIsPhp55()
    {
        static::assertFalse(PhpVersionComparator::isPhp55());
    }

    public function testIsPhp56()
    {
        static::assertTrue(PhpVersionComparator::isPhp56());
    }
}
