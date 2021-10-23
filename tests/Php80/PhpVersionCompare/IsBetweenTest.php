<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php80\PhpVersionCompare;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersionCompare;

/** @covers \Steevanb\PhpVersionCompare\PhpVersionCompare::isBetween */
final class IsBetweenTest extends TestCase
{
    public function testMajor(): void
    {
        static::assertTrue(PhpVersionCompare::isBetween('8', '9'));
    }

    public function testMajorFalse(): void
    {
        static::assertFalse(PhpVersionCompare::isBetween('7', '8'));
    }

    public function testMinor(): void
    {
        static::assertTrue(PhpVersionCompare::isBetween('8.0', '8.1'));
    }

    public function testMinorFalse(): void
    {
        static::assertFalse(PhpVersionCompare::isBetween('7.4', '8.0'));
    }

    public function testBugfix(): void
    {
        static::assertTrue(PhpVersionCompare::isBetween('8.0.12', '8.0.13'));
    }

    public function testBugfixFalse(): void
    {
        static::assertFalse(PhpVersionCompare::isBetween('8.0.11', '8.0.12'));
    }
}
