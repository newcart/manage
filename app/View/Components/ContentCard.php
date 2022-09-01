<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ContentCard extends Component
{
    /**
     * Card's custom class
     * @var string
     */
    public $class;

    /**
     * Card's title
     * @var string
     */
    public $title;

    /**
     * Card's content
     * @var string
     */
    public $content;

    /**
     * Card's icon
     * @var string
     */
    public $icon;

    /**
     * Card's indicatior
     * @var string
     */
    public $indicator;

    /**
     * Card's indicator color
     * @var string
     */
    public $indicatorColor;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $class           = 'col-6 col-md-3',
        string $icon            = '',
        string $indicator       = '',
        string $indicatorColor  = '',
        string $title           = '',
        string $content         = ''
    ) {
        $this->class            = $class;
        $this->icon             = $icon;
        $this->indicator        = $indicator;
        $this->indicatorColor   = $indicatorColor;
        $this->title            = $title;
        $this->content          = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.content-card');
    }
}
