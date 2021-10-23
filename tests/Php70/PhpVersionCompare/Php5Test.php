<?php

declare(strict_types=1);

namespace Steevanb\PhpVersionCompare\Tests\Php70\PhpVersionCompare;

use PHPUnit\Framework\TestCase;
use Steevanb\PhpVersionCompare\PhpVersionCompare;

class Php5Test extends TestCase
{
    public function testIsPhp5()
    {
        static::assertFalse(PhpVersionCompare::isPhp5());
    }

    public function testIsPhp53()
    {
        static::assertFalse(PhpVersionCompare::isPhp53());
    }

    public function testIsPhp54()
    {
        static::assertFalse(PhpVersionCompare::isPhp54());
    }

    public function testIsPhp55()
    {
        static::assertFalse(PhpVersionCompare::isPhp55());
    }

    public function testIsPhp56()
    {
        static::assertFalse(PhpVersionCompare::isPhp56());
    }
}