<?php

namespace Processton\ProcesstonElements;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Processton\ProcesstonElements\Skeleton\SkeletonClass
 */
class ProcesstonElementsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'processton-elements';
    }
}
