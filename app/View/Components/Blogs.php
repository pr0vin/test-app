<?php

namespace App\View\Components;

use App\Models\Blog;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Blogs extends Component
{
    /**
     * Create a new component instance.
     */
    public $blogs, $message;
    public function __construct($title = null)
    {
        //
        $this->blogs = Blog::where('id', '>', 0)->latest()->get();
        $this->message =  $title ?? "These are my blogs";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blogs');
    }
}
