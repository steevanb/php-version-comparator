<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php73\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator;

final class IsBetweenTest extends TestCase
{
    public function testMajor(): void
    {
        static::assertTrue(PhpVersionComparator::isBetween('7', '8'));
    }

    public function testMajorFalse(): void
    {
        static::assertFalse(PhpVersionComparator::isBetween('6', '7'));
    }

    public function testMinor(): void
    {
        static::assertTrue(PhpVersionComparator::isBetween('7.3', '7.4'));
    }

    public function testMinorFalse(): void
    {
        static::assertFalse(PhpVersionComparator::isBetween('7.2', '7.3'));
    }

    public function testBugfix(): void
    {
        static::assertTrue(PhpVersionComparator::isBetween('7.3.31', '7.3.32'));
    }

    public function testBugfixFalse(): void
    {
        static::assertFalse(PhpVersionComparator::isBetween('7.3.30', '7.3.31'));
    }
}
