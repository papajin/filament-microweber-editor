<?php

namespace Papajin\FilamentMicroweberEditor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Papajin\FilamentMicroweberEditor\FilamentMicroweberEditor
 */
class FilamentMicroweberEditor extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Papajin\FilamentMicroweberEditor\FilamentMicroweberEditor::class;
    }
}
