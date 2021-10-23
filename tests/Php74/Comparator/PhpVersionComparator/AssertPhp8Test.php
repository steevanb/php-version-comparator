<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php74\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\{
    Exception\VersionIsNotBetweenException,
    Comparator\PhpVersionComparator
};

final class AssertPhp8Test extends TestCase
{
    public function testAssertIsPhp8(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "7.4.25" is not between "8.0.0" and "9.0.0".');
        PhpVersionComparator::assertIsPhp8();
    }

    public function testAssertIsPhp80(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "7.4.25" is not between "8.0.0" and "8.1.0".');
        PhpVersionComparator::assertIsPhp80();
    }

    public function testAssertIsPhp81(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "7.4.25" is not between "8.1.0" and "8.2.0".');
        PhpVersionComparator::assertIsPhp81();
    }
}
