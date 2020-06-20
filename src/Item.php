<?php

namespace Sheenazien8\LaravelMenu;

class Item
{
    /**
     * @param $menu
     * @param string $title
     */
    public function __construct($menuConfiguration, string $title)
    {
        $this->menu = $menuConfiguration;
        $this->title = $title;
    }

    public function render()
    {
        return [
            'title' => $this->title,
            'options' => null
        ];
    }

}
