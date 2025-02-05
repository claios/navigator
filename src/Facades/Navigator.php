<?php

namespace AwesIO\Navigator\Facades;

use Illuminate\Support\Facades\Facade;

class Navigator extends Facade
{
    /**
     * @codeCoverageIgnoreStart
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'navigator';
    }
}
