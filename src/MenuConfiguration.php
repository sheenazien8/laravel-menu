<?php

namespace Sheenazien8\LaravelMenu;

class MenuConfiguration
{
    private $items;

    private string $name;

    private MenuOption $options;

    private array $reserved = ['route', 'action', 'url', 'prefix', 'parent', 'secure', 'raw'];

    /**
     * @param string $name
     * @param array $options = []
     */
    public function __construct(string $name, array $options = [])
    {
        $this->name = $name;
        $this->options = new MenuOption($options);
        $this->items = new ItemCollection();
    }

    public function addItem(string $title)
    {
        $item = new Item($this, $title);
        $this->items->add($item->render());

        return $item;
    }


    public function getTemplate()
    {
        /**
        * TODO: create options for div template <sheenazien8 2020-06-21>
        *
        */

        return sprintf('<ul%s>%s</ul>', null, $this->items->get());
    }
}
