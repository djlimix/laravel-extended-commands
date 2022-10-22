<?php

namespace Djlimix\ExtendedCommands\Providers;

use Djlimix\ExtendedCommands\Console\Commands\InterfaceMakeCommand;
use Djlimix\ExtendedCommands\Console\Commands\ServiceMakeCommand;
use Djlimix\ExtendedCommands\Console\Commands\TraitMakeCommand;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands(
                commands: [
                    InterfaceMakeCommand::class,
                    ServiceMakeCommand::class,
                    TraitMakeCommand::class,
                ],
            );
        }
    }
}
