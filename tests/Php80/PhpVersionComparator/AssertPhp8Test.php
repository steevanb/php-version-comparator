<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php80\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\{
    Exception\VersionIsNotBetweenException,
    PhpVersion\PhpVersionComparator
};

/**
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::assertIsPhp8
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::assertIsPhp80
 * @covers \Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator::assertIsPhp81
 */
final class AssertPhp8Test extends TestCase
{
    public function testAssertIsPhp8(): void
    {
        PhpVersionComparator::assertIsPhp8();
        $this->addToAssertionCount(1);
    }

    public function testAssertIsPhp80(): void
    {
        PhpVersionComparator::assertIsPhp80();
        $this->addToAssertionCount(1);
    }

    public function testAssertIsPhp81(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "8.0.12" is not between "8.1.0" and "8.2.0".');
        PhpVersionComparator::assertIsPhp81();
    }
}
