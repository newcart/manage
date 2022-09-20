<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    private string $class;

    private string $address;

    private string $icon;

    private string $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $class   ='primary',
        string $address ='#',
        string $icon    ='',
        string $title   =''
    )
    {
        $this->class = $class;
        $this->address = $address;
        $this->icon = $icon;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
