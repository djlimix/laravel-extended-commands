<?php

namespace Djlimix\ExtendedCommands\Console\Commands;

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
