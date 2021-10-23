<?php

namespace Steevanb\PhpVersionCompare;

class PhpVersionCompare
{
    const VERSION_5 = '5';
    const VERSION_5_3 = '5.3';
    const VERSION_5_4 = '5.4';
    const VERSION_5_5 = '5.5';
    const VERSION_5_6 = '5.6';

    const VERSION_7 = '7';
    const VERSION_7_0 = '7.0';
    const VERSION_7_1 = '7.1';
    const VERSION_7_2 = '7.2';
    const VERSION_7_3 = '7.3';
    const VERSION_7_4 = '7.4';

    const VERSION_8 = '8';
    const VERSION_8_0 = '8.';
    const VERSION_8_1 = '8.1';

    /** @return bool */
    public static function isPhp5()
    {
        return static::isBetween(static::VERSION_5, '6');
    }

    /** @return bool */
    public static function isPhp53()
    {
        return static::isBetween(static::VERSION_5_3, static::VERSION_5_4);
    }

    /** @return bool */
    public static function isPhp54()
    {
        return static::isBetween(static::VERSION_5_4, static::VERSION_5_5);
    }

    /** @return bool */
    public static function isPhp55()
    {
        return static::isBetween(static::VERSION_5_5, static::VERSION_5_6);
    }

    /** @return bool */
    public static function isPhp56()
    {
        return static::isBetween(static::VERSION_5_6, '5.7');
    }

    /** @return bool */
    public static function isPhp7()
    {
        return static::isBetween(static::VERSION_7, static::VERSION_8);
    }

    /** @return bool */
    public static function isPhp70()
    {
        return static::isBetween(static::VERSION_7_0, static::VERSION_7_1);
    }

    /** @return bool */
    public static function isPhp71()
    {
        return static::isBetween(static::VERSION_7_1, static::VERSION_7_2);
    }

    /** @return bool */
    public static function isPhp72()
    {
        return static::isBetween(static::VERSION_7_2, static::VERSION_7_3);
    }

    /** @return bool */
    public static function isPhp73()
    {
        return static::isBetween(static::VERSION_7_3, static::VERSION_7_4);
    }

    /** @return bool */
    public static function isPhp74()
    {
        return static::isBetween(static::VERSION_7_4, '7.5');
    }

    /** @return bool */
    public static function isPhp8()
    {
        return static::isBetween(static::VERSION_8, '9');
    }

    /** @return bool */
    public static function isPhp80()
    {
        return static::isBetween(static::VERSION_8_0, static::VERSION_8_1);
    }

    /** @return bool */
    public static function isPhp81()
    {
        return static::isBetween(static::VERSION_8_1, '8.2');
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
}
