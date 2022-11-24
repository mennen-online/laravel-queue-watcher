<?php

namespace MennenOnline\QueueWatcher;

use MennenOnline\QueueWatcher\Commands\WatchQueueWorkCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QueueWatcherServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-queue-watcher')
            ->hasConfigFile('queue-watcher')
            ->hasCommand(WatchQueueWorkCommand::class);
    }
}
