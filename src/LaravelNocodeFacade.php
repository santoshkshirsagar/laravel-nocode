<?php

namespace Santoshkshirsagar\LaravelNocode;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Santoshkshirsagar\LaravelNocode\Skeleton\SkeletonClass
 */
class LaravelNocodeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-nocode';
    }
}
