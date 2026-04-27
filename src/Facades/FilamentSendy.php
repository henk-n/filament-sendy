<?php

namespace Henkn\FilamentSendy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Henkn\FilamentSendy\FilamentSendy
 */
class FilamentSendy extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Henkn\FilamentSendy\FilamentSendy::class;
    }
}
