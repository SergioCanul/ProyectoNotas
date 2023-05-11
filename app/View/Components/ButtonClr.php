<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonClr extends Component
{
    public $text;
    public $route;
    /**
     * Create a new component instance.
     */
    public function __construct($text, $route)
    {
        //
        $this->text = $text;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button-clr');
    }
}
