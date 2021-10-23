<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php73\Comparator\PhpVersionComparator;

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
        $this->expectExceptionMessage('Version "7.3.31-2+ubuntu20.04.1+deb.sury.org+1" is not between "6" and "7".');
        PhpVersionComparator::assertIsBetween('6', '7');
    }

    public function testMinor(): void
    {
        PhpVersionComparator::assertIsBetween('7.3', '7.4');
        $this->addToAssertionCount(1);
    }

    public function testMinorFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.3.31-2+ubuntu20.04.1+deb.sury.org+1" is not between "7.2" and "7.3".'
        );
        PhpVersionComparator::assertIsBetween('7.2', '7.3');
    }

    public function testBugfix(): void
    {
        PhpVersionComparator::assertIsBetween('7.3.31', '7.4.26');
        $this->addToAssertionCount(1);
    }

    public function testBugfixFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.3.31-2+ubuntu20.04.1+deb.sury.org+1" is not between "7.3.30" and "7.3.31".'
        );
        PhpVersionComparator::assertIsBetween('7.3.30', '7.3.31');
    }
}
