<?php

namespace Steevanb\VersionComparator\Tests\Php56\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\Comparator\PhpVersionComparator;

final class IsPhp7Test extends TestCase
{
    public function testIsPhp7()
    {
        static::assertFalse(PhpVersionComparator::isPhp7());
    }

    public function testIsPhp70()
    {
        static::assertFalse(PhpVersionComparator::isPhp70());
    }

    public function testIsPhp71()
    {
        static::assertFalse(PhpVersionComparator::isPhp71());
    }

    public function testIsPhp72()
    {
        static::assertFalse(PhpVersionComparator::isPhp72());
    }

    public function testIsPhp73()
    {
        static::assertFalse(PhpVersionComparator::isPhp73());
    }

    public function testIsPhp74()
    {
        static::assertFalse(PhpVersionComparator::isPhp74());
    }
}
