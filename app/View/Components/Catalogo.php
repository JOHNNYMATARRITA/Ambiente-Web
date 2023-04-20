<?php

namespace App\View\Components;

use Closure;
use App\Models\Producto;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Catalogo extends Component
{
     public $productos;
    /**
     * Create a new component instance.
     */
    public function __construct($productos)
    {
        //
        $this->productos = $productos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.catalogo');
    }
}
