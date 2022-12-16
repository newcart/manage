<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextBox extends Component
{

    /**
     * Name of the input
     */
    private string $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('_partials.text-box');
    }
}
