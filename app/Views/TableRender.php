<?php

namespace App\Views;

use App\View;

class TableRender
{
    public array $headers = [];
    public array $items = [];

    public function __construct(?array $items = null, ?array $headers = null)
    {
        if ($items !== null) $this->set($items, $headers);
    }

    public function set(array $items, ?array $headers = null)
    {
        if ($headers !== null) {
            $this->headers = $headers;
        } else if (count($items) != 0) {
            $this->headers = array_keys($items[0]);
        }
        $this->items = $items;
    }

    public function render(): string
    {
        return View::render('components/table.php', [
            'headers' => $this->headers,
            'items' => $this->items,
        ]);
    }
}