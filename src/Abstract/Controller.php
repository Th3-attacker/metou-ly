<?php

declare ( strict_types = 1 );

namespace App\Abstract;

use Jenssegers\Blade\Blade;

abstract class Controller
{
    public function render( string $path, array $parameters = [] )
    {
        return (new Blade(VIEWS_DIR, CACHE_DIR))
            ->make($path, $parameters)
            ->render()
        ;
    }
}
