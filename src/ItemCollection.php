<?php

namespace Sheenazien8\LaravelMenu;

class ItemCollection
{
    private $item;

    public function add($item)
    {
        $this->item = sprintf('<li%s>%s</li>', $item['options'], $item['title']);
    }

    public function get()
    {
        return $this->item;
    }
}
