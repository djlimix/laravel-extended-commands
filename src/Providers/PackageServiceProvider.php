<?php

namespace Djlimix\LaravelExtendedCommands;

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
