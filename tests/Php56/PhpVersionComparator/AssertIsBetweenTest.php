<?php

namespace Steevanb\PhpVersionCompare\Tests\Php56\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\Exception\VersionIsNotBetweenException;
use Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator;

final class AssertIsBetweenTest extends TestCase
{
    public function testMajor()
    {
        PhpVersionComparator::assertIsBetween('5', '6');
        $this->addToAssertionCount(1);
    }

    public function testMajorFalse()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "4" and "5".');
        PhpVersionComparator::assertIsBetween('4', '5');
    }

    public function testMinor()
    {
        PhpVersionComparator::assertIsBetween('5.6', '5.7');
        $this->addToAssertionCount(1);
    }

    public function testMinorFalse()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "5.5" and "5.6".'
        );
        PhpVersionComparator::assertIsBetween('5.5', '5.6');
    }

    public function testBugfix()
    {
        PhpVersionComparator::assertIsBetween('5.6.40', '5.6.41');
        $this->addToAssertionCount(1);
    }

    public function testBugfixFalse()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "5.6.39" and "5.6.40".'
        );
        PhpVersionComparator::assertIsBetween('5.6.39', '5.6.40');
    }
}
