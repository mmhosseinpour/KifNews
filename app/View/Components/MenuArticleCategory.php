<?php

namespace App\View\Components;

use App\Models\ArticleCategory;
use Illuminate\View\Component;

class MenuArticleCategory extends Component
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
        $articleCategories = ArticleCategory::all();

        return view('components.menu-article-category', ['categories' => $articleCategories]);
    }
}
