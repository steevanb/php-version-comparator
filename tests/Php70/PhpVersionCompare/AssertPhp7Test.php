<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php70\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\{
    Exception\VersionIsNotBetweenException,
    PhpVersion\PhpVersionComparator
};

final class AssertPhp7Test extends TestCase
{
    public function testAssertIsPhp7()
    {
        PhpVersionComparator::assertIsPhp7();
        $this->addToAssertionCount(1);
    }

    public function testAssertIsPhp70()
    {
        PhpVersionComparator::assertIsPhp70();
        $this->addToAssertionCount(1);
    }

    public function testAssertIsPhp71()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.0.33-55+ubuntu20.04.1+deb.sury.org+1" is not between "7.1.0" and "7.2.0".'
        );
        PhpVersionComparator::assertIsPhp71();
    }

    public function testAssertIsPhp72()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.0.33-55+ubuntu20.04.1+deb.sury.org+1" is not between "7.2.0" and "7.3.0".'
        );
        PhpVersionComparator::assertIsPhp72();
    }

    public function testAssertIsPhp73()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.0.33-55+ubuntu20.04.1+deb.sury.org+1" is not between "7.3.0" and "7.4.0".'
        );
        PhpVersionComparator::assertIsPhp73();
    }

    public function testAssertIsPhp74()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "7.0.33-55+ubuntu20.04.1+deb.sury.org+1" is not between "7.4.0" and "7.5.0".'
        );
        PhpVersionComparator::assertIsPhp74();
    }
}
