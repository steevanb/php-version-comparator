<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php70\PhpVersionCompare;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersionCompare;

final class IsBetweenTest extends TestCase
{
    public function testMajor()
    {
        static::assertTrue(PhpVersionCompare::isBetween('7', '8'));
    }

    public function testMajorFalse()
    {
        static::assertFalse(PhpVersionCompare::isBetween('6', '7'));
    }

    public function testMinor()
    {
        static::assertTrue(PhpVersionCompare::isBetween('7.0', '7.1'));
    }

    public function testMinorFalse()
    {
        static::assertFalse(PhpVersionCompare::isBetween('6.9', '7.0'));
    }

    public function testBugfix()
    {
        static::assertTrue(PhpVersionCompare::isBetween('7.0.33', '7.0.34'));
    }

    public function testBugfixFalse()
    {
        static::assertFalse(PhpVersionCompare::isBetween('7.0.32', '7.0.33'));
    }
}
