<?php

namespace App\View\Components;

use App\Models\Article;
use Illuminate\View\Component;

class RelatedArticle extends Component
{
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $article = Article::query()->where('categoryId', '=', $this->id)->take(4)->get();
        return view('components.related-article', ["articles" => $article]);
    }
}
