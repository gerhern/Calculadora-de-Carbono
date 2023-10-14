<?php

namespace App\View\Components;

use Illuminate\View\Component;

class svgFootprint extends Component
{
    public $width;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($width)
    {
        //
        $this->width = $width;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.svg-footprint');
    }
}
