<?php

declare(strict_types=1);

namespace Djlimix\LaravelExtendedCommands;

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
