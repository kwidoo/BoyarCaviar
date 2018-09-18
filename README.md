# BoyarCaviar

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

auth - доделать
счет - доделать

Via Composer

``` bash
$ composer require kwidoo/boyarcaviar
```

## Usage

in Kernel.php
    protected $middlewareGroups = [
        'web' => [ 
        ...
            \Kwidoo\BoyarCaviar\Middleware\GenerateMenu::class,
           ...
           ],
    ];

in config/app.php

    'Cart' => Gloudemans\Shoppingcart\Facades\Cart::class,
        'Form' => Collective\Html\FormFacade::class,
        'Html' => Collective\Html\HtmlFacade::class,
        'Menu' => Lavary\Menu\Facade::class,

redirectifauthenticated -> убрать home;


## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [author name][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/kwidoo/boyarcaviar.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/kwidoo/boyarcaviar.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/kwidoo/boyarcaviar/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/kwidoo/boyarcaviar
[link-downloads]: https://packagist.org/packages/kwidoo/boyarcaviar
[link-travis]: https://travis-ci.org/kwidoo/boyarcaviar
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/kwidoo
[link-contributors]: ../../contributors]