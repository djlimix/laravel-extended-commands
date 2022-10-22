<?php

namespace Djlimix\ExtendedCommands\Console\Commands;

class TraitMakeCommand extends ExtendedGeneratorCommand
{
    protected $signature = 'make:trait {name}';

    protected $description = 'Create a trait class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Trait';
}
