<?php

namespace Lanxing\Yueguang\Facades;

/**
 * @see \Illuminate\Session\SessionManager
 * @see \Illuminate\Session\Store
 */
 use Illuminate\Support\Facades\Facade;
class YG extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'yueguang';
    }
}
