<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php71\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\{
    Exception\VersionIsNotBetweenException,
    PhpVersion\PhpVersionComparator
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
            'Version "7.1.33-42+ubuntu20.04.1+deb.sury.org+1" is not between "7.0.0" and "7.1.0".'
        );
        PhpVersionComparator::assertIsPhp70();
    }

    public function testAssertIsPhp71(): void
    {
        PhpVersionComparator::assertIsPhp71();
        $this->addToAssertionCount(1);
    }

    public function testAssertIsPhp72(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.1.33-42+ubuntu20.04.1+deb.sury.org+1" is not between "7.2.0" and "7.3.0".'
        );
        PhpVersionComparator::assertIsPhp72();
    }

    public function testAssertIsPhp73(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.1.33-42+ubuntu20.04.1+deb.sury.org+1" is not between "7.3.0" and "7.4.0".'
        );
        PhpVersionComparator::assertIsPhp73();
    }

    public function testAssertIsPhp74(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.1.33-42+ubuntu20.04.1+deb.sury.org+1" is not between "7.4.0" and "7.5.0".'
        );
        PhpVersionComparator::assertIsPhp74();
    }
}
