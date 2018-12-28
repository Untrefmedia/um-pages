<?php
namespace Untrefmedia\UMPages;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\Skeleton\SkeletonClass
 */
class UMPagesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'umpages';
    }
}
