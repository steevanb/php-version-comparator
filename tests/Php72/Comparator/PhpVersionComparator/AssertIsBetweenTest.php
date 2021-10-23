<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php72\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\{
    Exception\VersionIsNotBetweenException,
    Comparator\PhpVersionComparator
};

final class AssertIsBetweenTest extends TestCase
{
    public function testMajor(): void
    {
        PhpVersionComparator::assertIsBetween('7', '8');
        $this->addToAssertionCount(1);
    }

    public function testMajorFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "7.2.34-26+ubuntu20.04.1+deb.sury.org+1" is not between "6" and "7".');
        PhpVersionComparator::assertIsBetween('6', '7');
    }

    public function testMinor(): void
    {
        PhpVersionComparator::assertIsBetween('7.2', '7.3');
        $this->addToAssertionCount(1);
    }

    public function testMinorFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.2.34-26+ubuntu20.04.1+deb.sury.org+1" is not between "7.1" and "7.2".'
        );
        PhpVersionComparator::assertIsBetween('7.1', '7.2');
    }

    public function testBugfix(): void
    {
        PhpVersionComparator::assertIsBetween('7.2.34', '7.2.35');
        $this->addToAssertionCount(1);
    }

    public function testBugfixFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.2.34-26+ubuntu20.04.1+deb.sury.org+1" is not between "7.2.33" and "7.2.34".'
        );
        PhpVersionComparator::assertIsBetween('7.2.33', '7.2.34');
    }
}
