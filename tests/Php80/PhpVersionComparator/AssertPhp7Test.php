<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php80\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\{
    Exception\VersionIsNotBetweenException,
    PhpVersion\PhpVersionComparator
};

/**
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::assertIsPhp7
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::assertIsPhp70
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::assertIsPhp71
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::assertIsPhp72
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::assertIsPhp73
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::assertIsPhp74
 */
final class AssertPhp7Test extends TestCase
{
    public function testAssertIsPhp7(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "8.0.12" is not between "7.0.0" and "8.0.0".');
        PhpVersionComparator::assertIsPhp7();
    }

    public function testAssertIsPhp70(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "8.0.12" is not between "7.0.0" and "7.1.0".');
        PhpVersionComparator::assertIsPhp70();
    }

    public function testAssertIsPhp71(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "8.0.12" is not between "7.1.0" and "7.2.0".');
        PhpVersionComparator::assertIsPhp71();
    }

    public function testAssertIsPhp72(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "8.0.12" is not between "7.2.0" and "7.3.0".');
        PhpVersionComparator::assertIsPhp72();
    }

    public function testAssertIsPhp73(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "8.0.12" is not between "7.3.0" and "7.4.0".');
        PhpVersionComparator::assertIsPhp73();
    }

    public function testAssertIsPhp74(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "8.0.12" is not between "7.4.0" and "7.5.0".');
        PhpVersionComparator::assertIsPhp74();
    }
}
