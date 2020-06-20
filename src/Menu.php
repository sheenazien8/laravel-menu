<?php
/**
 * Contains the Menu facade class.
 *
 * @author      Sheenazien8
 * @license     MIT
 * @since       2020-05-20
 *
 */

namespace Sheenazien8\LaravelMenu;

use View;

class Menu
{
    /**
     * undocumented function
     *
     * @return void
     */
    public static function render(string $name, array $options = [])
    {
        $menu = new MenuConfiguration($name, $options);

        View::share($name, $menu);

        return $menu;
    }
}
