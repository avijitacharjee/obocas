<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SearchResultItem extends Component
{
    public $property ;
    public function __construct($property)
    {
        $this->property = $property;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-result-item');
    }
}
