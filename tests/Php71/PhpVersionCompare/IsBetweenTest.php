<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php71\PhpVersionCompare;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersionCompare;

final class IsBetweenTest extends TestCase
{
    public function testMajor(): void
    {
        static::assertTrue(PhpVersionCompare::isBetween('7', '8'));
    }

    public function testMajorFalse(): void
    {
        static::assertFalse(PhpVersionCompare::isBetween('6', '7'));
    }

    public function testMinor(): void
    {
        static::assertTrue(PhpVersionCompare::isBetween('7.1', '7.2'));
    }

    public function testMinorFalse(): void
    {
        static::assertFalse(PhpVersionCompare::isBetween('7.0', '7.1'));
    }

    public function testBugfix(): void
    {
        static::assertTrue(PhpVersionCompare::isBetween('7.1.33', '7.1.34'));
    }

    public function testBugfixFalse(): void
    {
        static::assertFalse(PhpVersionCompare::isBetween('7.1.32', '7.1.33'));
    }
}
