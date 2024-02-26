<?php

namespace Simon Barrett\LaravelEnvExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Simon Barrett\LaravelEnvExample\LaravelEnvExample
 */
class LaravelEnvExample extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Simon Barrett\LaravelEnvExample\LaravelEnvExample::class;
    }
}
