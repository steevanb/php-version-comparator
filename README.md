[![Version](https://img.shields.io/badge/version-0.0.0-4B9081.svg)](https://github.com/steevanb/php-version-compare/tree/0.0.0)
[![License](https://poser.pugx.org/steevanb/php-version-compare/license)](https://github.com/steevanb/php-version-compare/blob/master/LICENSE)
[![PHP](https://img.shields.io/badge/php-^5.3||^7.0||^8.0-blue.svg)](https://php.net)
![Lines](https://img.shields.io/badge/code%20lines-2,792-blue.svg)
![Downloads](https://poser.pugx.org/steevanb/php-version-compare/downloads)

[![CI](https://github.com/steevanb/php-version-compare/actions/workflows/ci.yml/badge.svg?branch=master)](https://github.com/steevanb/php-version-compare/actions/workflows/ci.yml)
![Tests](https://img.shields.io/badge/tests-20-blue.svg)
![Assertions](https://img.shields.io/badge/assertions-20-blue.svg)
![Coverage](https://img.shields.io/badge/coverage-100%25-success.svg)
![Infection](https://img.shields.io/badge/infection-100%25-success.svg)

## steevanb/php-version-compare

Add classes to compare PHP version easier than with `compare_version()` and `PHP_VERSION`.

[Changelog](changelog.md)

## Installation

```
composer require steevanb/php-version-compare ^0.0
```

## Compare with current PHP version

You can compare current PHP version with 2 versions to know if current php version is between this 2 versions:

```php
PhpVersionComparator::isBetween('8', '9'); // return true is PHP is >= 8.0.0 and < 9.0.0
PhpVersionComparator::isBetween('8.0', '8.1'); // return true is PHP is >= 8.0.0 and < 8.1.0
PhpVersionComparator::isBetween('8.0.0', '8.0.2'); // return true is PHP is >= 8.0.0 and < 8.0.2
```

## Shortcuts for each PHP major and minor version

`PhpVersionCompare` have a shortcut who call `isBetween()` for each major and minor version:

```php
// For PHP 5.3 to 5.6 
PhpVersionComparator::isPhp5(); // return true is PHP is >= 5.0.0 and < 6.0.0
PhpVersionComparator::isPhp53(); // return true is PHP is >= 5.3.0 and < 5.4.0
PhpVersionComparator::isPhp54(); // return true is PHP is >= 5.4.0 and < 5.5.0
PhpVersionComparator::isPhp55(); // return true is PHP is >= 5.5.0 and < 5.6.0
PhpVersionComparator::isPhp56(); // return true is PHP is >= 5.6.0 and < 5.7.0

// For PHP 7.0 to 7.4
PhpVersionComparator::isPhp7(); // return true is PHP is >= 7.0.0 and < 8.0.0
PhpVersionComparator::isPhp70(); // return true is PHP is >= 7.0.0 and < 7.1.0
PhpVersionComparator::isPhp71(); // return true is PHP is >= 7.1.0 and < 7.2.0
PhpVersionComparator::isPhp72(); // return true is PHP is >= 7.2.0 and < 7.3.0
PhpVersionComparator::isPhp73(); // return true is PHP is >= 7.3.0 and < 7.4.0
PhpVersionComparator::isPhp74(); // return true is PHP is >= 7.4.0 and < 7.5.0

// For PHP 8.0 to latest 8.x
PhpVersionComparator::isPhp8(); // return true is PHP is >= 8.0.0 and < 9.0.0
PhpVersionComparator::isPhp80(); // return true is PHP is >= 8.0.0 and < 8.1.0
PhpVersionComparator::isPhp81(); // return true is PHP is >= 8.1.0 and < 8.2.0
```

## Exception instead of returning the result

If you want to throw an exception instead of returning the result,
each method have it's `assert()` version who throw a `VersionIsNotBetweenException` exception:

```php
PhpVersionComparator::assertIsBetween('8', '9');
PhpVersionComparator::assertIsPhp5();
// etc
```
