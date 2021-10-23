<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php80\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\Comparator\PhpVersionComparator;

/** @covers \Steevanb\VersionComparator\Comparator\PhpVersionComparator::isBetween */
final class IsBetweenTest extends TestCase
{
    public function testMajor(): void
    {
        static::assertTrue(PhpVersionComparator::isBetween('8', '9'));
    }

    public function testMajorFalse(): void
    {
        static::assertFalse(PhpVersionComparator::isBetween('7', '8'));
    }

    public function testMinor(): void
    {
        static::assertTrue(PhpVersionComparator::isBetween('8.0', '8.1'));
    }

    public function testMinorFalse(): void
    {
        static::assertFalse(PhpVersionComparator::isBetween('7.4', '8.0'));
    }

    public function testBugfix(): void
    {
        static::assertTrue(PhpVersionComparator::isBetween('8.0.12', '8.0.13'));
    }

    public function testBugfixFalse(): void
    {
        static::assertFalse(PhpVersionComparator::isBetween('8.0.11', '8.0.12'));
    }
}
