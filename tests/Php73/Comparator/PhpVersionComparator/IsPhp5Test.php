<?php

declare(strict_types=1);

namespace Steevanb\VersionComparator\Tests\Php73\Comparator\PhpVersionComparator;

use PHPUnit\Framework\TestCase;
use Steevanb\VersionComparator\Comparator\PhpVersionComparator;

final class IsPhp5Test extends TestCase
{
    public function testIsPhp5(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp5());
    }

    public function testIsPhp53(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp53());
    }

    public function testIsPhp54(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp54());
    }

    public function testIsPhp55(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp55());
    }

    public function testIsPhp56(): void
    {
        static::assertFalse(PhpVersionComparator::isPhp56());
    }
}
