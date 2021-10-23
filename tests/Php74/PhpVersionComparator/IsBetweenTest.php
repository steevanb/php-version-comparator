<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php74\PhpVersionComparator;

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
        static::assertTrue(PhpVersionComparator::isBetween('7.4', '7.5'));
    }

    public function testMinorFalse(): void
    {
        static::assertFalse(PhpVersionComparator::isBetween('7.3', '7.4'));
    }

    public function testBugfix(): void
    {
        static::assertTrue(PhpVersionComparator::isBetween('7.4.25', '7.4.26'));
    }

    public function testBugfixFalse(): void
    {
        static::assertFalse(PhpVersionComparator::isBetween('7.4.24', '7.4.25'));
    }
}
