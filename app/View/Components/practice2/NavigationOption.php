<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavigationOption extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $section, public string $actualSection)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('components.navigation-option');
    }
}
