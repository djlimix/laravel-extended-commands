<?php

declare(strict_types=1);

namespace Djlimix\LaravelExtendedCommands;

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
