# BoyarCaviar

Simple website + online shop

## Installation

Via Composer

``` bash
$ composer require kwidoo/boyarcaviar
```

## Usage

To add menu:

in Kernel.php
    protected $middlewareGroups = [
        'web' => [ 
            ...
            \Kwidoo\BoyarCaviar\Middleware\GenerateMenu::class,
           ...
           ],
    ];

To add cart:

in config/app.php

        'Cart' => Gloudemans\Shoppingcart\Facades\Cart::class,
        'Form' => Collective\Html\FormFacade::class,
        'Html' => Collective\Html\HtmlFacade::class,
        'Menu' => Lavary\Menu\Facade::class,

redirectifauthenticated -> remove home route

Cart package might require Laravel version manual config

