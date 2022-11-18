<?php

namespace GeorgyKurian\FindUnusedRoutesAndControllers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GeorgyKurian\FindUnusedRoutesAndControllers\FindUnusedRoutesAndControllers
 */
class FindUnusedRoutesAndControllers extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \GeorgyKurian\FindUnusedRoutesAndControllers\FindUnusedRoutesAndControllers::class;
    }
}
