<?php

namespace Steevanb\PhpVersionCompare\Exception;

class VersionIsNotBetweenException extends PhpVersionCompareException
{
    /**
     * @param string $version
     * @param string $version1
     * @param string $version2
     * @param int $code
     */
    public function __construct($version, $version1, $version2, $code = 0, \Exception $previous = null)
    {
        parent::__construct(
            'Version "' . $version . '" is not between "' . $version1 . '" and "' . $version2 . '".',
            $code,
            $previous
        );
    }
}
