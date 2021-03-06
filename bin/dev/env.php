<?php

declare(strict_types=1);

use Steevanb\ParallelProcess\{
    Console\Application\ParallelProcessesApplication,
    Process\Process
};
use Symfony\Component\Console\Input\ArgvInput;

require $_SERVER['COMPOSER_HOME_PHP_8_0'] . '/vendor/autoload.php';
$rootDir = dirname(__DIR__, 2);

$composerProcess = (new Process([$rootDir . '/bin/composer', 'update', '--ansi']))
    ->setName('composer update');

(new ParallelProcessesApplication())
    ->addProcess($composerProcess)
    ->run(new ArgvInput($argv));
