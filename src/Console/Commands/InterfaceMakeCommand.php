<?php

namespace Djlimix\ExtendedCommands\Console\Commands;

class InterfaceMakeCommand extends ExtendedGeneratorCommand
{
    protected $signature = 'make:interface {name}';

    protected $description = 'Create an interface class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Interface';
}
