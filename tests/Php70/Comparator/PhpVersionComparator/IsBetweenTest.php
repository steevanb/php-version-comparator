<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php70\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\Comparator\PhpVersionComparator;

final class IsBetweenTest extends TestCase
{
    public function testMajor()
    {
        static::assertTrue(PhpVersionComparator::isBetween('7', '8'));
    }

    public function testMajorFalse()
    {
        static::assertFalse(PhpVersionComparator::isBetween('6', '7'));
    }

    public function testMinor()
    {
        static::assertTrue(PhpVersionComparator::isBetween('7.0', '7.1'));
    }

    public function testMinorFalse()
    {
        static::assertFalse(PhpVersionComparator::isBetween('6.9', '7.0'));
    }

    public function testBugfix()
    {
        static::assertTrue(PhpVersionComparator::isBetween('7.0.33', '7.0.34'));
    }

    public function testBugfixFalse()
    {
        static::assertFalse(PhpVersionComparator::isBetween('7.0.32', '7.0.33'));
    }
}
