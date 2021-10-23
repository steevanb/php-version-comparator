<?php

namespace Steevanb\PhpVersionCompare\Tests\Php56\PhpVersionCompare;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersionCompare;

final class IsBetweenTest extends TestCase
{
    public function testMajor()
    {
        static::assertTrue(PhpVersionCompare::isBetween('5', '6'));
    }

    public function testMajorFalse()
    {
        static::assertFalse(PhpVersionCompare::isBetween('4', '5'));
    }

    public function testMinor()
    {
        static::assertTrue(PhpVersionCompare::isBetween('5.6', '5.7'));
    }

    public function testMinorFalse()
    {
        static::assertFalse(PhpVersionCompare::isBetween('5.5', '5.6'));
    }

    public function testBugfix()
    {
        static::assertTrue(PhpVersionCompare::isBetween('5.6.40', '5.6.41'));
    }

    public function testBugfixFalse()
    {
        static::assertFalse(PhpVersionCompare::isBetween('5.6.39', '5.6.40'));
    }
}
