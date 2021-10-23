<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php71\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\{
    Exception\VersionIsNotBetweenException,
    PhpVersion\PhpVersionComparator
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
        $this->expectExceptionMessage('Version "7.1.33-42+ubuntu20.04.1+deb.sury.org+1" is not between "6" and "7".');
        PhpVersionComparator::assertIsBetween('6', '7');
    }

    public function testMinor(): void
    {
        PhpVersionComparator::assertIsBetween('7.1', '7.2');
        $this->addToAssertionCount(1);
    }

    public function testMinorFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.1.33-42+ubuntu20.04.1+deb.sury.org+1" is not between "7.0" and "7.1".'
        );
        PhpVersionComparator::assertIsBetween('7.0', '7.1');
    }

    public function testBugfix(): void
    {
        PhpVersionComparator::assertIsBetween('7.1.33', '7.1.34');
        $this->addToAssertionCount(1);
    }

    public function testBugfixFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.1.33-42+ubuntu20.04.1+deb.sury.org+1" is not between "7.1.32" and "7.1.33".'
        );
        PhpVersionComparator::assertIsBetween('7.1.32', '7.1.33');
    }
}
