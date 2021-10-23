<?php

namespace Steevanb\PhpVersionCompare\Tests\Php56\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\Exception\VersionIsNotBetweenException;
use Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator;

final class AssertPhp5Test extends TestCase
{
    public function testAssertIsPhp5()
    {
        PhpVersionComparator::assertIsPhp5();
        $this->addToAssertionCount(1);
    }

    public function testAssertIsPhp53()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "5.3.0" and "5.4.0".'
        );
        PhpVersionComparator::assertIsPhp53();
    }

    public function testAssertIsPhp54()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "5.4.0" and "5.5.0".'
        );
        PhpVersionComparator::assertIsPhp54();
    }

    public function testAssertIsPhp55()
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage(
            'Version "5.6.40-55+ubuntu20.04.1+deb.sury.org+1" is not between "5.5.0" and "5.6.0".'
        );
        PhpVersionComparator::assertIsPhp55();
    }

    public function testAssertIsPhp56()
    {
        PhpVersionComparator::assertIsPhp56();
        $this->addToAssertionCount(1);
    }
}
