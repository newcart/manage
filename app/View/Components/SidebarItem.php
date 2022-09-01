<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SidebarItem extends Component
{
    /**
     * Is the item active?
     * @var boolean
     */
    public $active = false;

    /**
     * The item's icon.
     * @var string
     */
    public $svg = '';

    /**
     * The item's text.
     * @var string
     */
    public $title = '';

    /**
     * The item's url.
     * @var string
     */
    public $url = '';

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        bool            $active,
        string          $svg,
        string          $url,
        string          $title
    ) {
        $this->title    = $title;
        $this->url      = $url;
        $this->svg      = $svg;
        $this->active   = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar-item');
    }
}
