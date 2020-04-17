<?php

namespace CKHan\ListboxSortable\Form\Field;

use Encore\Admin\Form\Field\Listbox;

/**
 * Class ListboxSortable
 * @package CKHan\ListboxSortable\Form\Field
 */
class ListboxSortable extends Listbox
{
    protected $view = 'admin::form.listboxsortable';

    protected $settings = [
        'moveOnSelect' => false,
        'sortByInputOrder' => true,
    ];

    protected static $css = [
        '/vendor/laravel-admin/bootstrap-duallistbox/dist/bootstrap-duallistbox.min.css',
        '/vendor/laravel-admin/bootstrap-duallistbox-sortable/bootstrap-duallistbox-sortable.min.css',
    ];

    protected static $js = [
        '/vendor/laravel-admin/bootstrap-duallistbox-sortable/jquery.bootstrap-duallistbox-sortable.min.js',
        '/vendor/laravel-admin/bootstrap-duallistbox-sortable/Sortable.min.js',
    ];
}
