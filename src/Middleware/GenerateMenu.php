<?php

namespace Kwidoo\BoyarCaviar\Middleware;

use Closure;

class GenerateMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        \Menu::make('MyNavBar', function ($menu) {
            $menu->add('Sturgeon<br>Caviar', ['route' => 'sturgeon', 'class' => 'nav-item nav-link' ]);
            $menu->add('Oscietra Classic<br>Caviar', ['route' => 'oscietra.classic', 'class' => 'nav-item nav-link' ]);
            $menu->add('Oscietra Royal<br>Caviar', ['route' => 'oscietra.royal', 'class' => 'nav-item nav-link' ]);
            $menu->add('Sevruga<br>Caviar', ['route' => 'sevruga', 'class' => 'nav-item nav-link' ]);
            $menu->add('Beluga<br>Caviar', ['route' => 'beluga', 'class' => 'nav-item nav-link' ]);
        });

        return $next($request);    
    }
}
