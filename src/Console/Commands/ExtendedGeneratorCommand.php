<?php

declare(strict_types=1);

namespace Djlimix\LaravelExtendedCommands;

use Illuminate\Console\GeneratorCommand;

class ExtendedGeneratorCommand extends GeneratorCommand
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub(): string
    {
        $type = strtolower($this->type);
        return __DIR__ . "/../../../stubs/{$type}.stub";
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace . "\{$this->type}s";
    }
}
