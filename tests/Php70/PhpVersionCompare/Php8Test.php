<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php70\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator;

final class Php8Test extends TestCase
{
    public function testIsPhp8()
    {
        static::assertFalse(PhpVersionComparator::isPhp8());
    }

    public function testIsPhp80()
    {
        static::assertFalse(PhpVersionComparator::isPhp80());
    }

    public function testIsPhp81()
    {
        static::assertFalse(PhpVersionComparator::isPhp81());
    }
}
