<?php

namespace Steevanb\VersionComparator\Tests\Php56\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\Exception\VersionIsNotBetweenException;
use Steevanb\VersionComparator\Comparator\PhpVersionComparator;

final class AssertPhp8Test extends TestCase
{
    public function testAssertIsPhp8()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "8.0.0" and "9.0.0".'
        );
        PhpVersionComparator::assertIsPhp8();
    }

    public function testAssertIsPhp80()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "8.0.0" and "8.1.0".'
        );
        PhpVersionComparator::assertIsPhp80();
    }

    public function testAssertIsPhp81()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "8.1.0" and "8.2.0".'
        );
        PhpVersionComparator::assertIsPhp81();
    }
}
