<?php

namespace MennenOnline\QueueWatcher\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use MennenOnline\QueueWatcher\QueueWatcherServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            QueueWatcherServiceProvider::class,
        ];
    }
}
