<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Equipo extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $nombre,
        public string $estadio,
        public int $titulos,
        public string $escudo ) { }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.equipo');
    }
}
