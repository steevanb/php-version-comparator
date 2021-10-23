<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php80\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\{
    Exception\VersionIsNotBetweenException,
    Comparator\PhpVersionComparator
};

/** @covers \Steevanb\VersionComparator\Comparator\PhpVersionComparator::assertIsBetween */
final class AssertIsBetweenTest extends TestCase
{
    public function testMajor(): void
    {
        PhpVersionComparator::assertIsBetween('8', '9');
        $this->addToAssertionCount(1);
    }

    public function testMajorFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "8.0.12" is not between "7" and "8".');
        PhpVersionComparator::assertIsBetween('7', '8');
    }

    public function testMinor(): void
    {
        PhpVersionComparator::assertIsBetween('8.0', '8.1');
        $this->addToAssertionCount(1);
    }

    public function testMinorFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "8.0.12" is not between "7.4" and "8.0".');
        PhpVersionComparator::assertIsBetween('7.4', '8.0');
    }

    public function testBugfix(): void
    {
        PhpVersionComparator::assertIsBetween('8.0.12', '8.0.13');
        $this->addToAssertionCount(1);
    }

    public function testBugfixFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "8.0.12" is not between "8.0.11" and "8.0.12".');
        PhpVersionComparator::assertIsBetween('8.0.11', '8.0.12');
    }
}
