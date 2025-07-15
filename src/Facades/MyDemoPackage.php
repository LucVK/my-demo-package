<?php

namespace Lucvk\MyDemoPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lucvk\MyDemoPackage\MyDemoPackage
 */
class MyDemoPackage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Lucvk\MyDemoPackage\MyDemoPackage::class;
    }
}
