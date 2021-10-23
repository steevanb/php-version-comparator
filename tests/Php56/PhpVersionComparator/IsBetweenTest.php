<?php

namespace Steevanb\PhpVersionCompare\Tests\Php56\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator;

final class IsBetweenTest extends TestCase
{
    public function testMajor()
    {
        static::assertTrue(PhpVersionComparator::isBetween('5', '6'));
    }

    public function testMajorFalse()
    {
        static::assertFalse(PhpVersionComparator::isBetween('4', '5'));
    }

    public function testMinor()
    {
        static::assertTrue(PhpVersionComparator::isBetween('5.6', '5.7'));
    }

    public function testMinorFalse()
    {
        static::assertFalse(PhpVersionComparator::isBetween('5.5', '5.6'));
    }

    public function testBugfix()
    {
        static::assertTrue(PhpVersionComparator::isBetween('5.6.40', '5.6.41'));
    }

    public function testBugfixFalse()
    {
        static::assertFalse(PhpVersionComparator::isBetween('5.6.39', '5.6.40'));
    }
}
