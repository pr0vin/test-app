<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\BlogCategory;

class CategorySelect extends Component
{
    /**
     * Create a new component instance.
     */
    public $categories, $selected;
    public function __construct($selected = null)
    {
        //

        $this->selected = $selected;
        $this->categories = BlogCategory::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.category-select');
    }
}
