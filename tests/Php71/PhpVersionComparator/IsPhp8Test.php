<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php71\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator;

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
