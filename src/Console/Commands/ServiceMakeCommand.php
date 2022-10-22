<?php

declare(strict_types=1);

namespace Djlimix\LaravelExtendedCommands;

class ServiceMakeCommand extends ExtendedGeneratorCommand
{
    protected $signature = 'make:service {name}';

    protected $description = 'Create a service class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service';
}
