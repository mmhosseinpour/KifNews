<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\View\Component;

class SliderBlog extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $newest = Article::orderBy('created_at', 'DESC')->take(5)->get();
        $peopular = Article::orderBy('visit', 'DESC')->take(5)->get();
        return view('components.slider-blog', ['newest' => $newest, 'popular' => $peopular]);
    }
}
