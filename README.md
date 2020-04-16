# ListboxSortable for Laravel-admin 1.6+
ListboxSortable是基于Laravel-admin表单组件的扩展，实现了listbox的拖拽排序功能。

## Require
- Laravel-admin >= 1.6

##Installation
运行下面的命令安装:

    "composer require  ckhan/laravel-admin-listbox-sortable"
然后，运行下面的命令发布静态文件:

    "php artisan vendor:publish --provider=CKHan\ListboxSortable\ListboxSortableServiceProvider --force"    

## Configuration
不需要其他额外的配置

## Usage
使用方法和Laravel-admin中表单组件listbox是一致的:
```php
$form->listboxsortable($column[, $label])->options([1 => 'foo', 2 => 'bar', 'val' => 'Option name']);
``` 
## Documentation
Laravel-admin开发文档[Laravel-admin](https://laravel-admin.org/docs/zh/)
## License
`ListboxSortable` is licensed under [The MIT License (MIT)](LICENSE).
