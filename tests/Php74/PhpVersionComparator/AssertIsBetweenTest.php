<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php74\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\{
    Exception\VersionIsNotBetweenException,
    PhpVersion\PhpVersionComparator
};

final class AssertIsBetweenTest extends TestCase
{
    public function testMajor(): void
    {
        PhpVersionComparator::assertIsBetween('7', '8');
        $this->addToAssertionCount(1);
    }

    public function testMajorFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "7.4.25" is not between "6" and "7".');
        PhpVersionComparator::assertIsBetween('6', '7');
    }

    public function testMinor(): void
    {
        PhpVersionComparator::assertIsBetween('7.4', '7.5');
        $this->addToAssertionCount(1);
    }

    public function testMinorFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "7.4.25" is not between "7.3" and "7.4".');
        PhpVersionComparator::assertIsBetween('7.3', '7.4');
    }

    public function testBugfix(): void
    {
        PhpVersionComparator::assertIsBetween('7.4.25', '7.4.26');
        $this->addToAssertionCount(1);
    }

    public function testBugfixFalse(): void
    {
        $this->expectException(VersionIsNotBetweenException::class);
        $this->expectExceptionCode(0);
        $this->expectExceptionMessage('Version "7.4.25" is not between "7.4.24" and "7.4.25".');
        PhpVersionComparator::assertIsBetween('7.4.24', '7.4.25');
    }
}
