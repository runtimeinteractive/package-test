<?php

namespace Runtimeinteractive\PackageTest\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Runtimeinteractive\PackageTest\PackageTest
 */
class PackageTest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'package-test';
    }
}
