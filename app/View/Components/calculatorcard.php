<?php

namespace App\View\Components;

use Illuminate\View\Component;

class calculatorcard extends Component
{
    public $link;
    public $img;
    public $alt;
    public $title;
    public $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $img, $alt, $title, $description)
    {
        //
        $this->link = $link;
        $this->img = $img;
        $this->alt = $alt;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.calculatorcard');
    }
}
