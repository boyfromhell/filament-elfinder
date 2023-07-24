# Laravel filament-elfinder

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ichbin/filament-elfinder.svg?style=flat-square)](https://packagist.org/packages/ichbin/filament-elfinder)
[![Total Downloads](https://img.shields.io/packagist/dt/ichbin/filament-elfinder.svg?style=flat-square)](https://packagist.org/packages/ichbin/filament-elfinder)

![img](https://raw.githubusercontent.com/boyfromhell/filament-elfinder/master/img/filament-elfinder.png)
## Installation

You can install the package via composer:

```bash
composer require ichbin/filament-elfinder
```

To install the plugin run

```bash
php artisan filament-elfinder:install
```

This is the contents of the published config file:

```php
return array(

    // Group the menu item belongs to
    'group' => 'FileManager',

    // Sidebar label
    'label' => 'Files',

    // title

    'title'=> 'File Manager',

    'icon' => 'heroicon-o-document',

    // Slug

    'slug' => '/admin/elfinder',

    /*
    |--------------------------------------------------------------------------
    | Upload dir
    |--------------------------------------------------------------------------
    |
    | The dir where to store the images (relative from public)
    |
    */
    'dir' => ['storage'],

    /*
    |--------------------------------------------------------------------------
    | Filesystem disks (Flysytem)
    |--------------------------------------------------------------------------
    |
    | Define an array of Filesystem disks, which use Flysystem.
    | You can set extra options, example:
    |
    | 'my-disk' => [
    |        'URL' => url('to/disk'),
    |        'alias' => 'Local storage',
    |    ]
    */
    'disks' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | Roots
    |--------------------------------------------------------------------------
    |
    | By default, the roots file is LocalFileSystem, with the above public dir.
    | If you want custom options, you can set your own roots below.
    |
    */

    'roots' => null,

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    | These options are merged, together with 'roots' and passed to the Connector.
    | See https://github.com/Studio-42/elFinder/wiki/Connector-configuration-options-2.1
    |
    */

    'options' => array(),

    /*
    |--------------------------------------------------------------------------
    | Root Options
    |--------------------------------------------------------------------------
    |
    | These options are merged, together with every root by default.
    | See https://github.com/Studio-42/elFinder/wiki/Connector-configuration-options-2.1#root-options
    |
    */
    'root_options' => array(

    ),

);
```

## Credits

- [IchBin](https://github.com/IchBin)
- [Website](https://www.gametracker.ro)
- [barryvdh](https://github.com/barryvdh)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
