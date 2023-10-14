<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tipcard extends Component
{
    public $img;
    public $card;
    public $title;
    public $description;
    public $author;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img, $card, $title, $description, $author)
    {
        //
        $this->img = $img;
        $this->card = $card;
        $this->title = $title;
        $this->description = $description;
        $this->author = $author;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tipcard');
    }
}
