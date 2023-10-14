<?php

namespace App\View\Components;

use Illuminate\View\Component;

class coin extends Component
{
    public $coin;
    public $img;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($coin, $img)
    {
        //
        $this->coin = $coin;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.coin');
    }
}
