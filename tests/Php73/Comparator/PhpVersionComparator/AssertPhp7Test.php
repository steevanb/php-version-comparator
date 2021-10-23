<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php73\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\{
    Exception\VersionIsNotBetweenException,
    Comparator\PhpVersionComparator
};

final class AssertPhp7Test extends TestCase
{
    public function testAssertIsPhp7(): void
    {
        PhpVersionComparator::assertIsPhp7();
        $this->addToAssertionCount(1);
    }

    public function testAssertIsPhp70(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.3.31-2+ubuntu20.04.1+deb.sury.org+1" is not between "7.0.0" and "7.1.0".'
        );
        PhpVersionComparator::assertIsPhp70();
    }

    public function testAssertIsPhp71(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.3.31-2+ubuntu20.04.1+deb.sury.org+1" is not between "7.1.0" and "7.2.0".'
        );
        PhpVersionComparator::assertIsPhp71();
    }

    public function testAssertIsPhp72(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.3.31-2+ubuntu20.04.1+deb.sury.org+1" is not between "7.2.0" and "7.3.0".'
        );
        PhpVersionComparator::assertIsPhp72();
    }

    public function testAssertIsPhp73(): void
    {
        PhpVersionComparator::assertIsPhp73();
        $this->addToAssertionCount(1);
    }

    public function testAssertIsPhp74(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.3.31-2+ubuntu20.04.1+deb.sury.org+1" is not between "7.4.0" and "7.5.0".'
        );
        PhpVersionComparator::assertIsPhp74();
    }
}
