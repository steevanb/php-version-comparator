<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php74\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\Comparator\PhpVersionComparator;

final class IsPhp8Test extends TestCase
{
    public function testIsPhp8(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp8());
    }

    public function testIsPhp80(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp80());
    }

    public function testIsPhp81(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp81());
    }
}
