<?php

declare(strict_types=1);

namespace Mingalevme\RetryablePsrHttpClient\Sleeper;

/**
 * @psalm-api
 * @codeCoverageIgnore
 */
final class NoSleepSleeper implements SleeperInterface
{
    public function sleep(int|float $timeout): void
    {
    }
}
