<?php
/**
 * Contains the Menu facade class.
 *
 * @author      Sheenazien8
 * @license     MIT
 * @since       2020-05-20
 *
 */


namespace Sheenazien8\LaravelMenu\Facades;

use Illuminate\Support\Facades\Facade;

class Menu extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'menu';
    }
}
