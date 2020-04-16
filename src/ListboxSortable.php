<?php

namespace CKHan\ListboxSortable;

use Encore\Admin\Extension;

class ListboxSortable extends Extension
{
    public $name = 'laravel-admin-listbox-sortable';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Listboxsortable',
        'path'  => 'laravel-admin-listbox-sortable',
        'icon'  => 'fa-gears',
    ];
}