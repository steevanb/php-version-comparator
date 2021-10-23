<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php70\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\{
    Exception\VersionIsNotBetweenException,
    Comparator\PhpVersionComparator
};

final class AssertIsBetweenTest extends TestCase
{
    public function testMajor()
    {
        PhpVersionComparator::assertIsBetween('7', '8');
        $this->addToAssertionCount(1);
    }

    public function testMajorFalse()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "7.0.33-55+ubuntu20.04.1+deb.sury.org+1" is not between "6" and "7".');
        PhpVersionComparator::assertIsBetween('6', '7');
    }

    public function testMinor()
    {
        PhpVersionComparator::assertIsBetween('7.0', '7.1');
        $this->addToAssertionCount(1);
    }

    public function testMinorFalse()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.0.33-55+ubuntu20.04.1+deb.sury.org+1" is not between "6.9" and "7.0".'
        );
        PhpVersionComparator::assertIsBetween('6.9', '7.0');
    }

    public function testBugfix()
    {
        PhpVersionComparator::assertIsBetween('7.0.33', '7.0.34');
        $this->addToAssertionCount(1);
    }

    public function testBugfixFalse()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.0.33-55+ubuntu20.04.1+deb.sury.org+1" is not between "7.0.32" and "7.0.33".'
        );
        PhpVersionComparator::assertIsBetween('7.0.32', '7.0.33');
    }
}
