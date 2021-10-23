<?php

namespace Steevanb\VersionComparator\Comparator;

use Steevanb\VersionComparator\Exception\VersionIsNotBetweenException;

class PhpVersionComparator
{
    const VERSION_5 = '5.0.0';
    const VERSION_5_3 = '5.3.0';
    const VERSION_5_4 = '5.4.0';
    const VERSION_5_5 = '5.5.0';
    const VERSION_5_6 = '5.6.0';

    const VERSION_7 = '7.0.0';
    const VERSION_7_0 = '7.0.0';
    const VERSION_7_1 = '7.1.0';
    const VERSION_7_2 = '7.2.0';
    const VERSION_7_3 = '7.3.0';
    const VERSION_7_4 = '7.4.0';

    const VERSION_8 = '8.0.0';
    const VERSION_8_0 = '8.0.0';
    const VERSION_8_1 = '8.1.0';

    /** @return bool */
    public static function isPhp5()
    {
        return static::isBetween(static::VERSION_5, '6.0.0');
    }

    public static function assertIsPhp5()
    {
        static::assertIsBetween(static::VERSION_5, '6.0.0');
    }

    /** @return bool */
    public static function isPhp53()
    {
        return static::isBetween(static::VERSION_5_3, static::VERSION_5_4);
    }

    /** @return void */
    public static function assertIsPhp53()
    {
        static::assertIsBetween(static::VERSION_5_3, static::VERSION_5_4);
    }

    /** @return bool */
    public static function isPhp54()
    {
        return static::isBetween(static::VERSION_5_4, static::VERSION_5_5);
    }

    /** @return void */
    public static function assertIsPhp54()
    {
        static::assertIsBetween(static::VERSION_5_4, static::VERSION_5_5);
    }

    /** @return bool */
    public static function isPhp55()
    {
        return static::isBetween(static::VERSION_5_5, static::VERSION_5_6);
    }

    /** @return void */
    public static function assertIsPhp55()
    {
        static::assertIsBetween(static::VERSION_5_5, static::VERSION_5_6);
    }

    /** @return bool */
    public static function isPhp56()
    {
        return static::isBetween(static::VERSION_5_6, '5.7.0');
    }

    /** @return void */
    public static function assertIsPhp56()
    {
        static::assertIsBetween(static::VERSION_5_6, '5.7.0');
    }

    /** @return bool */
    public static function isPhp7()
    {
        return static::isBetween(static::VERSION_7, static::VERSION_8);
    }

    /** @return void */
    public static function assertIsPhp7()
    {
        static::assertIsBetween(static::VERSION_7, static::VERSION_8);
    }

    /** @return bool */
    public static function isPhp70()
    {
        return static::isBetween(static::VERSION_7_0, static::VERSION_7_1);
    }

    /** @return void */
    public static function assertIsPhp70()
    {
        static::assertIsBetween(static::VERSION_7_0, static::VERSION_7_1);
    }

    /** @return bool */
    public static function isPhp71()
    {
        return static::isBetween(static::VERSION_7_1, static::VERSION_7_2);
    }

    /** @return void */
    public static function assertIsPhp71()
    {
        static::assertIsBetween(static::VERSION_7_1, static::VERSION_7_2);
    }

    /** @return bool */
    public static function isPhp72()
    {
        return static::isBetween(static::VERSION_7_2, static::VERSION_7_3);
    }

    /** @return void */
    public static function assertIsPhp72()
    {
        static::assertIsBetween(static::VERSION_7_2, static::VERSION_7_3);
    }

    /** @return bool */
    public static function isPhp73()
    {
        return static::isBetween(static::VERSION_7_3, static::VERSION_7_4);
    }

    /** @return void */
    public static function assertIsPhp73()
    {
        static::assertIsBetween(static::VERSION_7_3, static::VERSION_7_4);
    }

    /** @return bool */
    public static function isPhp74()
    {
        return static::isBetween(static::VERSION_7_4, '7.5.0');
    }

    /** @return void */
    public static function assertIsPhp74()
    {
        static::assertIsBetween(static::VERSION_7_4, '7.5.0');
    }

    /** @return bool */
    public static function isPhp8()
    {
        return static::isBetween(static::VERSION_8, '9.0.0');
    }

    /** @return void */
    public static function assertIsPhp8()
    {
        static::assertIsBetween(static::VERSION_8, '9.0.0');
    }

    /** @return bool */
    public static function isPhp80()
    {
        return static::isBetween(static::VERSION_8_0, static::VERSION_8_1);
    }

    /** @return void */
    public static function assertIsPhp80()
    {
        static::assertIsBetween(static::VERSION_8_0, static::VERSION_8_1);
    }

    /** @return bool */
    public static function isPhp81()
    {
        return static::isBetween(static::VERSION_8_1, '8.2.0');
    }

    /** @return void */
    public static function assertIsPhp81()
    {
        static::assertIsBetween(static::VERSION_8_1, '8.2.0');
    }

    /**
     * @param string $version1
     * @param string $version2
     * @return bool
     */
    public static function isBetween($version1, $version2)
    {
        return
            version_compare(PHP_VERSION, $version1, '>=')
            && version_compare(PHP_VERSION, $version2, '<');
    }

    /**
     * @param string $version1
     * @param string $version2
     * @return void
     */
    public static function assertIsBetween($version1, $version2)
    {
        if (static::isBetween($version1, $version2) === false) {
            throw new VersionIsNotBetweenException(PHP_VERSION, $version1, $version2);
        }
    }
}
