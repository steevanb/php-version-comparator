<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php72\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\{
    Exception\VersionIsNotBetweenException,
    Comparator\PhpVersionComparator
};

final class AssertPhp5Test extends TestCase
{
    public function testAssertIsPhp5(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.2.34-26+ubuntu20.04.1+deb.sury.org+1" is not between "5.0.0" and "6.0.0".'
        );
        PhpVersionComparator::assertIsPhp5();
    }

    public function testAssertIsPhp53(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.2.34-26+ubuntu20.04.1+deb.sury.org+1" is not between "5.3.0" and "5.4.0".'
        );
        PhpVersionComparator::assertIsPhp53();
    }

    public function testAssertIsPhp54(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.2.34-26+ubuntu20.04.1+deb.sury.org+1" is not between "5.4.0" and "5.5.0".'
        );
        PhpVersionComparator::assertIsPhp54();
    }

    public function testAssertIsPhp55(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.2.34-26+ubuntu20.04.1+deb.sury.org+1" is not between "5.5.0" and "5.6.0".'
        );
        PhpVersionComparator::assertIsPhp55();
    }

    public function testAssertIsPhp56(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.2.34-26+ubuntu20.04.1+deb.sury.org+1" is not between "5.6.0" and "5.7.0".'
        );
        PhpVersionComparator::assertIsPhp56();
    }
}
