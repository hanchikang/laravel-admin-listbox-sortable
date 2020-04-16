<?php

namespace CKHan\ListboxSortable;

use Illuminate\Support\ServiceProvider;
use Encore\Admin\Form;

class ListboxSortableServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(ListboxSortable $extension)
    {
        if (! ListboxSortable::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'admin');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes([$assets => public_path('vendor/laravel-admin')], 'laravel-admin-assets');
        }

        $this->app->booted(function () {
            Form::extend('listboxsortable', \CKHan\ListboxSortable\Form\Field\ListboxSortable::class);
        });
    }
}
