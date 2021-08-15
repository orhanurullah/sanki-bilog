<?php

namespace Sankii\Bilog;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sankii\Bilog\Skeleton\SkeletonClass
 */
class BilogFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bilog';
    }
}
