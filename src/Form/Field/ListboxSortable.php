<?php

namespace ckhan\ListboxSortable\Form\Field;

use Encore\Admin\Form\Field\Listbox;

/**
 * Class ListboxSortable
 * @package ckhan\ListboxSortable\Form\Field
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
        '/vendor/laravel-admin/bootstrap-duallistbox-sortable/bootstrap-duallistbox-sortable.min.css?t=2021011101',
    ];

    protected static $js = [
        '/vendor/laravel-admin/bootstrap-duallistbox-sortable/jquery.bootstrap-duallistbox-sortable.min.js?t=2020112501',
        '/vendor/laravel-admin/bootstrap-duallistbox-sortable/Sortable.min.js',
    ];

    /**
     * @param string $url
     * @param array $parameters
     * @param array $options
     * @return $this|Listbox|\Encore\Admin\Form\Field\MultipleSelect|\Encore\Admin\Form\Field\Select
     */
    protected function loadRemoteOptions($url, $parameters = [], $options = [])
    {
        $ajaxOptions = json_encode(array_merge([
            'url' => $url.'?'.http_build_query($parameters),
        ], $options));

        $this->script = <<<EOT

$.ajax($ajaxOptions).done(function(data) {

  var listbox = $("{$this->getElementClassSelector()}");

    var value = listbox.data('value') + '';

    if (value) {
      value = value.split(',');
    }

    for (var key in data) {
        var selected =  ($.inArray(key, value) >= 0) ? 'selected data-sortindex='+value.indexOf(key) : '';
        listbox.append('<option value="'+key+'" '+selected+'>'+data[key]+'</option>');
    }

    listbox.bootstrapDualListbox('refresh', true);
});
EOT;

        return $this;
    }
}
