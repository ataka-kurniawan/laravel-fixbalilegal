<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceCard extends Component
{
    /**
     * Create a new component instance.
     */

    public $icon;
    public $title;
    public $desc;

    public function __construct($icon,$title,$desc)
    {
        $this->icon = $icon;
        $this->title=$title;
        $this->desc=$desc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.service-card');
    }
}
