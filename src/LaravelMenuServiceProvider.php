<?php

/**
 * Contains the Menu LaravelMenuServiceProvider class.
 *
 * @author      Sheenazien8
 * @license     MIT
 * @since       2020-05-20
 *
 */

namespace Sheenazien8\LaravelMenu;

use Illuminate\Support\ServiceProvider;
use Sheenazien8\LaravelMenu\Menu;

class LaravelMenuServiceProvider extends ServiceProvider
{
    /**
    * Register any application services.
    *
    * @return void
    */
    public function register()
    {

    }

    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        $source = realpath($raw = __DIR__.'/../config/menu.php') ?: $raw;

        $this->publishes([
            $source => config_path('menu.php'),
        ]);

        include __DIR__.'/routes.php';

        $this->app->singleton('menu', function ($app) {
            return new Menu();
        });

        $this->setMenu();
    }

    protected function setMenu(): void
    {
        $menu = Menu::render('sidebar');
        $menu->addItem('dashoard');
    }

}
