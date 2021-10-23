<?php

namespace Steevanb\VersionComparator\Tests\Php56\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\Comparator\PhpVersionComparator;
use Steevanb\VersionComparator\Exception\VersionIsNotBetweenException;

final class AssertPhp7Test extends TestCase
{
    public function testAssertIsPhp7()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "7.0.0" and "8.0.0".'
        );
        PhpVersionComparator::assertIsPhp7();
    }

    public function testAssertIsPhp70()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "7.0.0" and "7.1.0".'
        );
        PhpVersionComparator::assertIsPhp70();
    }

    public function testAssertIsPhp71()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "7.1.0" and "7.2.0".'
        );
        PhpVersionComparator::assertIsPhp71();
    }

    public function testAssertIsPhp72()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "7.2.0" and "7.3.0".'
        );
        PhpVersionComparator::assertIsPhp72();
    }

    public function testAssertIsPhp73()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "7.3.0" and "7.4.0".'
        );
        PhpVersionComparator::assertIsPhp73();
    }

    public function testAssertIsPhp74()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "7.4.0" and "7.5.0".'
        );
        PhpVersionComparator::assertIsPhp74();
    }
}
