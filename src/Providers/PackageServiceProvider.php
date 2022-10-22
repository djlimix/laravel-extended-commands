<?php

declare(strict_types=1);

namespace Djlimix\LaravelExtendedCommands\Providers;

use Djlimix\LaravelExtendedCommands\InterfaceMakeCommand;
use Djlimix\LaravelExtendedCommands\ServiceMakeCommand;
use Djlimix\LaravelExtendedCommands\TraitMakeCommand;
use Illuminate\Support\ServiceProvider;

final class PackageServiceProvider extends ServiceProvider
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
