<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php70\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersion\PhpVersionComparator;

final class Php5Test extends TestCase
{
    public function testIsPhp5()
    {
        static::assertFalse(PhpVersionComparator::isPhp5());
    }

    public function testIsPhp53()
    {
        static::assertFalse(PhpVersionComparator::isPhp53());
    }

    public function testIsPhp54()
    {
        static::assertFalse(PhpVersionComparator::isPhp54());
    }

    public function testIsPhp55()
    {
        static::assertFalse(PhpVersionComparator::isPhp55());
    }

    public function testIsPhp56()
    {
        static::assertFalse(PhpVersionComparator::isPhp56());
    }
}
