<?php

namespace App\View\Components\practice2\brands;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class layout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $section)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('components.practice2.brands.layout');
    }
}
