<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertSuccess extends Component
{
    public $key;

    public function __construct($key = 'success')
    {
        $this->key = $key;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-success');
    }
}
