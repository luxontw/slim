<?php

namespace App\Views;

use App\View;

class ListRender
{
    public bool $isOrdered;
    public array $items = [];

    public function __construct(?array $items = null, ?bool $isOrdered = null)
    {
        if ($items !== null) $this->set($items, $isOrdered);
    }

    public function set(array $items, ?bool $isOrdered = false)
    {
        $this->isOrdered = $isOrdered;
        $this->items = $items;
    }

    public function render(): string
    {
        return View::render('components/list.php', [
            'isOrdered' => $this->isOrdered,
            'items' => $this->items,
        ]);
    }
}